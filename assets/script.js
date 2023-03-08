window.addEventListener("load", () => {
  resizeCustomLinks();
  applyBackgroundToDiagram();
  generateTableRows();
});

/****************************************************/
function countRowsAbove(link) {
  let count = 0;
  let currentRow = link.closest(".row");

  let currentSub = currentRow.closest(".sub");

  let previousSub = currentSub.previousElementSibling;
  while (previousSub && previousSub.classList.contains("sub")) {
    let rows = previousSub.querySelectorAll(".row");
    count += rows.length;
    previousSub = previousSub.previousElementSibling;
  }

  let rows = currentSub.querySelectorAll(".row");
  for (let i = 0; i < rows.length; i++) {
    if (rows[i] === currentRow) {
      break;
    }
    count++;
  }

  return count;
}

function resizeCustomLinks() {
  const customLinks = document.querySelectorAll(".custom-link");

  customLinks.forEach((link) => {
    const height = countRowsAbove(link) * 95;

    link.style.height = `${height}px`;
    link.style.top = `-${height - 40}px`;
  });
}

/**************************************************************/
function extractRGBValues(str) {
  const regex = /rgb\((\d{1,3}), (\d{1,3}), (\d{1,3})\)/;
  const match = regex.exec(str);

  if (match === null) {
    throw new Error("Invalid RGB string format");
  }

  return {
    r: parseInt(match[1], 10),
    g: parseInt(match[2], 10),
    b: parseInt(match[3], 10),
  };
}

function countParentSubs(caseElem) {
  let count = 0;
  let parent = caseElem.parentNode;
  while (parent && !parent.classList.contains("diagram")) {
    if (parent.classList.contains("sub")) {
      count++;
    }
    parent = parent.parentNode;
  }
  return count;
}

function applyBackgroundToColumn(col) {
  const caseEl = col.querySelector(".head .case");
  const computedStyles = getComputedStyle(caseEl);
  const background = computedStyles.backgroundColor;
  const rgbValue = extractRGBValues(background);

  const cases = col.querySelectorAll(".case");
  for (let i = 0; i < cases.length; i++) {
    const currentCase = cases[i];

    const parentSubs = countParentSubs(cases[i]);

    let opacity = 0.8 - 0.2 * parentSubs;

    const backgroundColor = `rgba(${rgbValue.r}, ${rgbValue.g}, ${rgbValue.b}, ${opacity})`;
    currentCase.style.backgroundColor = backgroundColor;
  }
}

function applyBackgroundToDiagram() {
  const cols = document.querySelectorAll(".col");
  cols.forEach((col) => {
    applyBackgroundToColumn(col);
  });
}

/**************************************************************************/

// function calculerPERT() {
//   var table = document.querySelector(".estimation");

//   if (table) {
//     var rows = table.rows;

//     for (var i = 1; i < rows.length; i++) {
//       var pessimiste = parseInt(rows[i].cells[1].textContent);
//       var optimiste = parseInt(rows[i].cells[2].textContent);
//       var moyenne = parseInt(rows[i].cells[3].textContent);

//       var pert = (pessimiste + optimiste + 4 * moyenne) / 6;
//       rows[i].cells[4].textContent = pert;
//     }
//   }
// }

const datasPert = [
  {
    title: "Participer aux modules",
    datas: [
      { task: "Suivre les cours des modules", p: 30, o: 22, m: 24 },
      { task: "Réaliser les TP des modules", p: 6, o: 4, m: 5 },
    ],
    color: "red",
  },
  {
    title: "Développer le projet fil rouge",
    datas: [
      { task: "Trouver une idéee de projet", p: 1, o: 0.1, m: 0.4 },
      { task: "Concevoir le projet", p: 4, o: 1, m: 2 },
      { task: "Réaliser le projet", p: 12, o: 4, m: 8 },
    ],
    color: "yellow",
  },
  {
    title: "Développer le projet IOT",
    datas: [
      {
        task: "Trouver un projet en lien avec le fil rouge",
        p: 1,
        o: 0.1,
        m: 0.4,
      },
      { task: "Concevoir le projet", p: 4, o: 1, m: 2 },
      { task: "Réaliser le projet", p: 8, o: 2, m: 4 },
    ],
    color: "yellow",
  },
  {
    title: "Développer un projet perso",
    datas: [{ task: "Développer un jeu de dames en lignes", p: 3, o: 1, m: 2 }],
    color: "yellow",
  },
  {
    title: "Trouver un stage",
    datas: [
      { task: "Campagne de distribution de CV", p: 8, o: 2, m: 5 },
      { task: "Visibilité web (linkedin, indeed...)", p: 1, o: 0.4, m: 0.8 },
    ],
    color: "blue",
  },
  {
    title: "",
    datas: [
      { task: "Participer à un projet au sein du stage", p: 16, o: 14, m: 15 },
    ],
    color: "blue",
  },
  {
    title: "Rédiger le dossier de soutenance",
    datas: [
      {
        task: "Identifier tous les blocs de compétences",
        p: 1,
        o: 0.2,
        m: 0.6,
      },
      {
        task: "Illustrer avec les réalisations dans les projets",
        p: 8,
        o: 5,
        m: 6,
      },
      { task: "Relier proprement le dossier", p: 0.4, o: 0.1, m: 0.2 },
    ],
    color: "green",
  },
  {
    title: "",
    datas: [{ task: "Préparer une presentation orale", p: 1, o: 0.4, m: 0.8 }],
    color: "green",
  },
  {
    title: "",
    datas: [{ task: "Concevoir un diaporama", p: 1, o: 0.5, m: 0.8 }],
    color: "green",
  },
];

function generateTableRows() {
  const tableBody = document.querySelector(".estimation tbody");

  for (const data of datasPert) {
    if (data.title !== "") {
      const titleRow = document.createElement("tr");
      titleRow.innerHTML = `<th colspan="5" class="${data.color}">${data.title}</th>`;
      tableBody.appendChild(titleRow);
    } else {
    }
    for (const subData of data.datas) {
      const subDataRow = document.createElement("tr");
      subDataRow.innerHTML = `
        <tr>
          <td class="task ${data.title === "" && data.color}" ${
        data.title === "" && "' style='font-weight:bold'"
      }>${subData.task}</td>
          <td ${data.title === "" && "class='" + data.color + "'"}>${
        subData.p
      }</td>
          <td ${data.title === "" && "class='" + data.color + "'"}>${
        subData.o
      }</td>
          <td ${data.title === "" && "class='" + data.color + "'"}>${
        subData.m
      }</td>
          <td class="pert ${data.title === "" && data.color}">${(
        (subData.p + subData.o + subData.m * 4) /
        6
      ).toFixed(1)}</td>
        </tr>
      `;
      tableBody.appendChild(subDataRow);
    }
  }
}
