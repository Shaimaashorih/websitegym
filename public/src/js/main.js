const cInpParent = document.querySelector(".color-preview");
const cInp1 = document.getElementById("color1");
const cInp2 = document.getElementById("color2");
const cInp3 = document.getElementById("color3");
const cInp4 = document.getElementById("color4");
let owlLanding = document.querySelector(".owl-landing");
var owlGrmnastics = document.querySelector(".owl-grmnastics");

let landing = document.querySelector(".landing");
let owl_item = document.querySelectorAll(".landing .owl-item");
let normal_landing = document.querySelector(".landing.normal");
var normal_landing_img = document.querySelector(".landing.normal .bg img");


function replace_all(l, e) {
  var word = e;
  return +word.replaceAll(`${l}`, "");
}


if (normal_landing_img != null) {
  normal_landing.style.backgroundImage = `url(${normal_landing_img.src})`;
  normal_landing_img.style.display = `none`;
}

const activePage = window.location.pathname;
const navLinks = document.querySelectorAll(".navBar a").forEach((link) => {
  if (link.href.includes(`${activePage}`)) {
    link.classList.add("active");
    console.log(link);
  }
});

let header = document.querySelector("header");
let navBar = document.querySelector(".navBar");
function nav_op(e) {
  if (navBar != null) {
    navBar.classList.toggle("op");
    e.classList.toggle("op");
  }
}

if (cInpParent != null) {
  function cInpParent_op(e) {
    cInpParent.classList.toggle("op");
    e.children[0].classList.toggle("fa-spin");
  }
  cInp1.oninput = function (e) {
    document.documentElement.style.setProperty(
      "--main-color",
      `${cInp1.value}`
    );
  };
  cInp2.oninput = function (e) {
    document.documentElement.style.setProperty("--dark", `${cInp2.value}`);
  };
  cInp3.oninput = function (e) {
    document.documentElement.style.setProperty("--white", `${cInp3.value}`);
  };
  cInp4.oninput = function (e) {
    document.documentElement.style.setProperty("--black", `${cInp4.value}`);
  };
  if (owlLanding != null) {
    $(".owl-landing").owlCarousel({
      loop: true,
      // margin: 10,
      nav: true,
      autoplay: true,
      responsive: {
        0: {
          items: 1,
        },
      },
    });
  }
}
if (owlGrmnastics != null) {
  $(owlGrmnastics).owlCarousel({
    loop: true,
    margin: 2,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      400: {
        items: 2,
      },
      600: {
        items: 3,
        nav: true,
      },
      1000: {
        items: 4,
        nav: true,
        loop: false,
      },
    },
  });
}
var videoView = document.querySelector(".video-view");
var videoViewClose = document.querySelector(".video-view .close");
function videoOp() {
  if (videoView != null) {
    videoView.classList.toggle("op");
  }
}
// go top btn
let topButton = document.createElement("button");
let topButtonIcon = `<i class="fas fa-arrow-up"></i>`;
topButton.innerHTML = topButtonIcon;
topButton.className = "btn topBtn";
topButton.setAttribute("onclick", "scroll_now()");

topButton.setAttribute("id", "scroll_now");
document.body.appendChild(topButton);

function scroll_now() {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
}
//

let filterBtns = document.querySelectorAll(
  ".courses-section .btn-container button"
);
let filterCards = document.querySelectorAll(".courses-section .card");

function filter(btn, img) {
  btn.forEach((b) => {
    b.addEventListener("click", (e) => {
      btn.forEach((eo) => {
        eo.classList.remove("active-btn");
      });
      b.classList.add("active-btn");
    });
  });

  for (i = 0; i < btn.length; i++) {
    btn[i].addEventListener("click", (e) => {
      const filter = e.target.dataset.filter;
      img.forEach((proudct) => {
        for (var i = 0; i < filterCards.length; i++) {
          // console.log(filterCards[i])
          if (img[i].getAttribute("filter-name") == filter) {
            // console.log(img[i]);

            img[i].classList.add("dis-block");
            img[i].classList.remove("dis-none");
          } else if (filter == "all") {
            img[i].classList.add("dis-block");
            img[i].classList.remove("dis-none");

          } else {
            img[i].classList.remove("dis-block");
            img[i].classList.add("dis-none");
          }
        }
      });
    });
  }
}
filter(filterBtns, filterCards);

// start dashBord Script

let dropDataDownEl = document.querySelectorAll("[data-dropDown]");
function dropCheck(e) {
  if (e.children[0].parentElement.classList.contains("op")) {
    e.children[0].nextElementSibling.style.maxHeight = `${e.children[0].nextElementSibling.scrollHeight}px`
  }
  else {
    e.children[0].nextElementSibling.style.maxHeight = `${0}px`
  }
}
if (dropDataDownEl.length > 0) {

  dropDataDownEl.forEach(e => {
    // console.log(e.children);
    e.children[0].addEventListener("click", b => {
      e.children[0].parentElement.classList.toggle("op");
      dropCheck(e);
    })

  })
}



let flexPage = document.querySelector(".flex-page");
let leftNav = document.querySelector(".left-nav");
let pageContent = document.querySelector(".page-content");
let db_header = document.querySelector(".db-header");
let pageTitle = document.getElementById("page-title");
let titleTag = document.querySelector("title");
let hrader_toggle = document.querySelector(".hrader-toggle");
var windowWidth = window.innerWidth;

if (pageTitle != null) {
  pageTitle.innerHTML = titleTag.innerHTML;
}
function gridPageResize() {
  var windowWidth = window.innerWidth;
  if (flexPage != null) {

    if (leftNav.getBoundingClientRect().width > 0) {
      db_header.children[0].style.width = `${leftNav.getBoundingClientRect().width}px`
    }
    leftNav.style.top = `${db_header.getBoundingClientRect().height}px`;
    leftNav.style.height = `calc(100vh - ${db_header.getBoundingClientRect().height}px)`;
    pageContent.style.marginTop = `${db_header.getBoundingClientRect().height}px`
    pageContent.style.width = `calc(100% - ${leftNav.getBoundingClientRect().width}px)`;
    if (windowWidth < 1200) {
      leftNav.classList.add("close");
    }
    else {
      leftNav.classList.remove("close");
    }
  }
}

function headerToggle() {
  leftNav.classList.toggle("hide");
  if (leftNav.getBoundingClientRect().width > 0) {
    db_header.children[0].style.width = `${leftNav.getBoundingClientRect().width}px`
  }
  pageContent.style.marginTop = `${db_header.getBoundingClientRect().height}px`
  pageContent.style.width = `calc(100% - ${leftNav.getBoundingClientRect().width}px)`;
}

if (hrader_toggle != null) {
  hrader_toggle.setAttribute("onclick", `headerToggle()`)
}


gridPageResize();

window.onload = e => {
  gridPageResize();

}
window.onresize = e => {
  gridPageResize();
  if (leftNav != null) {
    if (window.innerWidth < 1200) {
      leftNav.classList.add("close");
    }
    else {
      leftNav.classList.remove("close");
    }
  }
}

// naitev-pai-chart

function replace_all(l, e) {
  var word = e;
  return +word.replaceAll(`${l}`, "");
}
let NP_charts = document.querySelectorAll(".naitev-pai-chart");
function NP_chart() {
  console.log(NP_charts.length)
  if (NP_charts.length > 0) {
    console.log(NP_charts.length)
    NP_charts.forEach(e => {
      var p = "80"
      var eA = replace_all("%", e.getAttribute("data-persent"));
      if (e.getAttribute("data-bg") != null & e.getAttribute("data") != "") {
        e.style.backgroundImage = `conic-gradient(${e.getAttribute("data-bg") + p} ${(eA / 100) * 360}deg, white 0deg)`;

      }
      else {
        e.style.backgroundImage = `conic-gradient(#00000000 ${(eA / 100) * 360}deg, white 0deg)`;

      }
      e.querySelector("span").style.backgroundColor = `${e.getAttribute("data-bg")}`
    })
  }
  else {
    console.log("length => 0")
  }
}
NP_chart();


function getdataOl(el, path, array) {
  el.parentElement
    .querySelectorAll(`${path}`).forEach(e => {
      array.push(+e.getAttribute("chart-data"));

    })
}

function getdataOlString(el, path, array) {
  el.parentElement
    .querySelectorAll(`${path}`).forEach(e => {
      array.push(e.getAttribute("chart-data"));

    })
}

let workout_statistic_chart_her = document.getElementById("workout-statistic-chart");
if (workout_statistic_chart_her) {
  var WSC_Arrays = {
    yogaArray: [],
    runningArray: [],
    cyclingArray: []
  };
  // workout_statistic_chart_her.parentElement
  // .querySelectorAll(".yoga-data ol").forEach(e=>{
  //   WSC_Arrays.yogaArray.push(+e.getAttribute("chart-data"));
  // })

  getdataOl(workout_statistic_chart_her, `.yoga-data ol`, WSC_Arrays.yogaArray)
  getdataOl(workout_statistic_chart_her, `.running-data ol`, WSC_Arrays.runningArray)
  getdataOl(workout_statistic_chart_her, `.cycling-data ol`, WSC_Arrays.cyclingArray)

  let workout_statistic_chart = document.getElementById("workout-statistic-chart").getContext('2d');

  var WSC = new Chart(workout_statistic_chart, {
    data: {
      datasets: [
        {
          type: "line",
          label: `yoga`,
          data: WSC_Arrays.yogaArray,
          borderColor: "#fc943d",
          pointRadius: 5,
          borderWidth: 5,

        },
        {
          type: "line",
          label: `Cycling`,
          data: WSC_Arrays.cyclingArray,
          borderColor: "#2ea7c3",
          pointRadius: 5,
          borderWidth: 5,

        },
        {
          type: "line",
          label: `yoga`,
          data: WSC_Arrays.runningArray,
          borderColor: "#be4bcf",
          pointRadius: 5,
          borderWidth: 5,

        },
      ],
      labels: ["jun", "fep", "mar", "april", "jou"],
    },
    options: {
      plugins: {
        legend: {
          labels: false
        }
      }, tooltips: {
        mode: "index",
        intersect: false,
        enabled: true,
      },
    }
  })

}

let running_chart_her = document.getElementById("running-chart");
if (running_chart_her) {

  var RC_array = {
    data: [],
    labels: [],
  }
  getdataOl(running_chart_her, `li.chart-data ol`, RC_array.data)
  getdataOlString(running_chart_her, `li.chart-labels ol`, RC_array.labels)



  let running_chart = document.getElementById("running-chart").getContext('2d');
  var RC = new Chart(running_chart, {
    data: {
      datasets: [
        {
          type: "line",
          label: `yoga`,
          data: RC_array.data,
          borderColor: "#fc943d",
          pointRadius: 5,
          borderWidth: 5,

        }
      ],
      labels: RC_array.labels,
    },

    options: {
      plugins: {
        legend: {
          labels: false
        }
      }, tooltips: {
        mode: "index",
        intersect: false,
        enabled: true,
      },
    }
  })

}

let cycling_chart_her = document.getElementById("cycling-chart");
if (cycling_chart_her) {
  var CC_array = {
    data: [],
    labels: [],
  }
  getdataOl(cycling_chart_her, `li.chart-data ol`, CC_array.data)
  getdataOlString(cycling_chart_her, `li.chart-labels ol`, CC_array.labels)


  let cycling_chart = document.getElementById("cycling-chart").getContext('2d');
  var CC = new Chart(cycling_chart, {
    data: {
      datasets: [
        {
          type: "line",
          label: `yoga`,
          data: CC_array.data,
          borderColor: "#39a7c2",
          pointRadius: 5,
          borderWidth: 5,

        }
      ],
      labels: CC_array.labels,
    },

    options: {
      plugins: {
        legend: {
          labels: false
        }
      }, tooltips: {
        mode: "index",
        intersect: false,
        enabled: true,
      },
    }
  })

}

let yoga_chart_her = document.getElementById("yoga-chart");
if (yoga_chart_her) {


  var YC_array = {
    data: [],
    labels: [],
  }
  getdataOl(yoga_chart_her, `li.chart-data ol`, YC_array.data)
  getdataOlString(yoga_chart_her, `li.chart-labels ol`, YC_array.labels)


  let yoga_chart = document.getElementById("yoga-chart").getContext('2d');
  var YC = new Chart(yoga_chart, {
    data: {
      datasets: [
        {
          type: "line",
          label: `yoga`,
          data: YC_array.data,
          borderColor: "#bc50cb",
          pointRadius: 5,
          borderWidth: 5,

        }
      ],
      labels: YC_array.labels,
    },

    options: {
      plugins: {
        legend: {
          labels: false
        }
      }, tooltips: {
        mode: "index",
        intersect: false,
        enabled: true,
      },
    }
  })

}

let stat_chart_her = document.getElementById("stat-chart");
if (stat_chart_her) {
  var statArrays = {
    labels: [],
    data: [],
  };
  getdataOl(stat_chart_her, `.stat-data ol`, statArrays.data);
  getdataOlString(stat_chart_her, `.stat-labels ol`, statArrays.labels);


  let stat_chart = document.getElementById("stat-chart").getContext('2d');
  var RC = new Chart(stat_chart, {
    type: "doughnut",
    data: {
      labels: statArrays.labels,
      datasets: [

        {
          data: statArrays.data,
          backgroundColor: ["rgba(110,197,30,1)", "rgb(30, 167, 197)", "#eee"],

        }
      ],
    },

  })

}

let calorise_chart_her = document.getElementById("calories-chart");
if (calorise_chart_her) {



  var calorise_array = {
    green_line: [],
    red_line: [],
    labels: [],
  }
  getdataOl(calorise_chart_her, `li.green-line-data ol`, calorise_array.green_line)
  getdataOl(calorise_chart_her, `li.red-line-data ol`, calorise_array.red_line)
  getdataOlString(calorise_chart_her, `li.chart-labels ol`, calorise_array.labels)


  let calorise_chart = document.getElementById("calories-chart").getContext('2d');
  var CC = new Chart(calorise_chart, {
    data: {
      datasets: [
        {
          type: "bar",
          label: ``,
          data: calorise_array.red_line,
          backgroundColor: "#fb2e5b",
        },
        {
          type: "bar",
          label: ``,
          data: calorise_array.green_line,
          backgroundColor: "#72c438",
        }
      ],
      labels: calorise_array.labels,
    },
    options: {
      plugins: {
        legend: {
          labels: false
        }
      }, tooltips: {
        mode: "index",
        intersect: false,
        enabled: true,
      },
    }
  })
}


var dataColor = document.querySelectorAll("[data-color]");
if (dataColor.length > 0) {
  dataColor.forEach(e => {
    e.style.color = `${e.getAttribute("data-color")}`
  })
}

var menu_owl = document.getElementById("owl-menu");
if (menu_owl != null) {
  $(menu_owl).owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      400: {
        items: 1,
      },
      600: {

        items: 2,
      },
      1000: {
        items: 3,
        nav: true,
        // loop: false,
      },
    },
  });
}

let dycalender = document.getElementById("dycalender");
if (dycalender != null) {
  dycalendar.draw({
    target: '#dycalender',
    type: 'month',
    dayformat: 'full',
    monthformat: 'full',
    highlighttargetdate: true,
    prevnextbutton: 'show'
  })
}

let naitev_progress = document.querySelectorAll(".naitev-progres");
if (naitev_progress.length > 0) {
  naitev_progress.forEach(e => {
    e.querySelector(".line").style.width = `${replace_all("%", e.getAttribute("data-width"))}%`;
    e.querySelector(".value").style.left = `${replace_all("%", e.getAttribute("data-width"))}%`;
  })
}


let stat_bar_chart_her = document.getElementById("stat-bar-chart");
if (stat_bar_chart_her) {



  var SBC_array = {
    blue_line: [],
    orange_line: [],
    labels: [],
  }
  getdataOl(stat_bar_chart_her, `li.blue-line-data ol`, SBC_array.blue_line)
  getdataOl(stat_bar_chart_her, `li.orange-line-data ol`, SBC_array.orange_line)
  getdataOlString(stat_bar_chart_her, `li.chart-labels ol`, SBC_array.labels)

  let stat_bar_chart = document.getElementById("stat-bar-chart").getContext("2d");
  var SBC = new Chart(stat_bar_chart, {
    data: {
      datasets: [
        {
          type: "bar",
          label: `Running`,
          data: SBC_array.orange_line,
          backgroundColor: "#ff9432",
        },
        {
          type: "bar",
          label: `Cycling`,
          data: SBC_array.blue_line,
          backgroundColor: "#39a7c2",
        }
      ],
      labels: SBC_array.labels,
    },

  })
}

let formCard = document.querySelector(".login-sign-forms .card")
let forms_toggle = document.querySelectorAll(".login-sign-forms .form-toggle");
if (forms_toggle.length > 0) {
  forms_toggle.forEach(e => {
    if (formCard != null) {
      e.addEventListener("click", e => {
        e.preventDefault();
        formCard.classList.toggle("ac");
      })
    }
  })
}

function dropDownMaxWidth() {
  if (document.querySelectorAll(`[data-dropDown] .dropdown`)
    != null)
    document.querySelectorAll(`[data-dropDown] .dropdown`)
      .forEach(e => {
        e.style.maxWidth = `${window.innerWidth}px`;
      })
}
dropDownMaxWidth();
function leftNavHideAdd() {
  if (leftNav != null) {
    if (window.innerWidth < 1200){
      leftNav.classList.add("hide");
      leftNav.classList.add("close");
    }
    else{
      if(leftNav.classList.contains("close")){
        leftNav.classList.remove("close");
      }
    }
  }

}
leftNavHideAdd();
window.onresize = e => {
  dropDownMaxWidth();
  leftNavHideAdd();
}
