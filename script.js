// const scroll = new LocomotiveScroll({
//     el: document.querySelector('.main'),
//     smooth: true
//  });

function loco() {
  gsap.registerPlugin(ScrollTrigger);

  const locoScroll = new LocomotiveScroll({
    el: document.querySelector(".main"),
    smooth: true,
  });

  locoScroll.on("scroll", ScrollTrigger.update);

  ScrollTrigger.scrollerProxy(".main", {
    scrollTop(value) {
      return arguments.length
        ? locoScroll.scrollTo(value, 0, 0)
        : locoScroll.scroll.instance.scroll.y;
    },
    getBoundingClientRect() {
      return {
        top: 0,
        left: 0,
        width: window.innerWidth,
        height: window.innerHeight,
      };
    },

    pinType: document.querySelector(".main").style.transform
      ? "transform"
      : "fixed",
  });
  ScrollTrigger.addEventListener("refresh", () => locoScroll.update());

  ScrollTrigger.refresh();
}

loco();

var crsr = document.querySelector(".cursor");
var main = document.querySelector(".main");
main.addEventListener("mousemove", function (pro) {
  crsr.style.left = pro.x + 5 + "px"; //cursor distance form circle 10
  crsr.style.top = pro.y + 2 + "px";
});

var vdo = document.querySelector("video");
vdo.addEventListener("mouseenter", function () {
  crsr.innerHTML = "play video";
  gsap.to(crsr, {
    height: "20px",
    width: "90px",
    borderRadius: "10px",
    padding: "0px 4px",
    // textAlign: "center",
  });
});

vdo.addEventListener("mouseleave", function () {
  crsr.innerHTML = "";
  gsap.to(crsr, {
    height: "15px",
    width: "15px",
    borderRadius: "50%",
    // padding: "",
    // textAlign: "center",
  });
});
// var navpart2cr= document.querySelector(".page1 .nav-part2 h4 ")
// navpart2cr.addEventListener("mouseenter", function () {
//   // crsr.innerHTML = " ";
//   gsap.to(crsr, {
//     height: "20px",
//     width: "70px",
//     borderRadius: "10px",
//     padding: "0px 3px",
//     // textAlign: "center",
//   });
// });
// navpart2cr.addEventListener("mouseleave", function () {
//   crsr.innerHTML = "";
//   gsap.to(crsr, {
//     height: "15px",
//     width: "15px",
//     borderRadius: "50%",
//     // padding: "",
//     // textAlign: "center",
//   });
// });
// image cursor ------->
var pg3img = document.querySelector(".title1 img");
pg3img.addEventListener("mouseenter", function () {
  crsr.innerHTML = "view";
  gsap.to(crsr, {
    height: "50px",
    width: "50px",
    borderRadius: "40px",
    paddingTop: "10px",
    // textAlign: "center",
  });
});

pg3img.addEventListener("mouseleave", function () {
  crsr.innerHTML = "";
  gsap.to(crsr, {
    height: "15px",
    width: "15px",
    borderRadius: "50%",
    // padding: "",
    // textAlign: "center",
  });
});

var title2 = document.querySelector(".title2 img");
title2.addEventListener("mouseenter", function () {
  crsr.innerHTML = "view";
  gsap.to(crsr, {
    height: "50px",
    width: "50px",
    borderRadius: "40px",
    paddingTop: "10px",
    // textAlign: "center",
  });
});

title2.addEventListener("mouseleave", function () {
  crsr.innerHTML = "";
  gsap.to(crsr, {
    height: "15px",
    width: "15px",
    borderRadius: "50%",
    // padding: "",
    // textAlign: "center",
  });
});

var title3 = document.querySelector(".title3 img");
title3.addEventListener("mouseenter", function () {
  crsr.innerHTML = "view";
  gsap.to(crsr, {
    height: "50px",
    width: "50px",
    borderRadius: "40px",
    paddingTop: "10px",
    // textAlign: "center",
  });
});

title3.addEventListener("mouseleave", function () {
  crsr.innerHTML = "";
  gsap.to(crsr, {
    height: "15px",
    width: "15px",
    borderRadius: "50%",
    // padding: "",
    // textAlign: "center",
  });
});

var title4 = document.querySelector(".title4 img");
title4.addEventListener("mouseenter", function () {
  crsr.innerHTML = "view";
  gsap.to(crsr, {
    height: "50px",
    width: "50px",
    borderRadius: "40px",
    paddingTop: "10px",
    // textAlign: "center",
  });
});

title4.addEventListener("mouseleave", function () {
  crsr.innerHTML = "";
  gsap.to(crsr, {
    height: "15px",
    width: "15px",
    borderRadius: "50%",
    // padding: "",
    // textAlign: "center",
  });
});
var tl = gsap.timeline({
  scrollTrigger: {
    trigger: ".page1 h1",
    scroller: ".main",
    // markers: true,
    start: "top 30%",
    end: "top 0%",
    scrub: 3,
  },
});
tl.to(
  ".page1 h1",
  {
    x: -100,
    duration: 1,
  },
  "same"
);

tl.to(
  ".page1 h2",
  {
    x: 100,
    duration: 1,
  },
  "same"
);

tl.to(
  ".page1 video",
  {
    width: "90%",
  },
  "same"
);

gsap.from(".page1 #scroll", {
  y: 40,
  duration: 1,
  repeat: -1,
  yoyo: true,
});

var bgchange = gsap.timeline({
  scrollTrigger: {
    trigger: ".page1 h1",
    scroller: ".main",
    // markers: true,
    start: "top -123%",
    end: "top -121%",
    scrub: 3,
  },
});
bgchange.to(".main", {
  backgroundColor: "#fff",
  // color:"black"
});

var pg3 = gsap.timeline({
  scrollTrigger: {
    trigger: ".page3 h1",
    scroller: ".main",
    // markers: true,
    start: "top -270%",
    end: "top -241%",
    scrub: 3,
  },
});
pg3.to(".main", {
  backgroundColor: "#0f0D0D",
  // color:"black"
});

//page5
var boxes = document.querySelectorAll(".boxes");
// boxes.forEach(function (elem) {
//   elem.addEventListener("mouseenter", function () {
//     var att = elem.getAttribute("data-image");
//     crsr.style.height = "200px";
//     crsr.style.width = "200px";
//     crsr.style.borderRadius = "20px";
//     crsr.style.backgroundImage = `url(${att})`;
//     // gsap.to(crsr , {
//     //   height:"300px",
//     //   width:"300px",
//     //   borderRadius:"0",
//     //   backgroundImage: `url(${att})`
//     // })
//   });
//   elem.addEventListener("mouseleave", function () {
//     // var att = elem.getAttribute("data-image");
//     crsr.style.height = "15px";
//     crsr.style.width = "15px";
//     crsr.style.borderRadius = "50%";
//     // crsr.style.backgroundImage = `url(${att})`;
//   });
// });
