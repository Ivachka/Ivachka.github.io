

//----------------------- gsap------------
const tl = gsap.timeline({ defaults: {duration: 1} })
tl.from(".optime__tittle",{ opacity: 0, y: 30}, 0.4)
  .from(".img__optime",{opacity: 0,  x: -30}, 1)
  .from(".menu",{opacity: 0,  y: -30}, 1)
  .from(".but",{opacity: 0,  y: -30}, 1.2)
  .from(".subtitle",{opacity: 0,  y: -30}, 1.8)
  .from(".button",{opacity: 0,  y: -30}, 1.8);

  //  -----------------scroll-------------------


gsap.to(".optime__inner", {
  scrollTrigger: {
    trigger: ".header",
    start: "top top",
    scrub: true,
  },
  yPercent: -20,
  opacity: 0,
})

gsap.from(".why-lease", {
  scrollTrigger: {
    trigger: ".optime__inner",
    start: "top top",
    scrub: true,
  },
  xPercent: -40,
  yPercent: -30,
  opacity: 0,
})
gsap.from(".daisy__inner", {
  scrollTrigger: {
    trigger: ".why-lease",
    start: "top top",
    scrub: true,
  },
  yPercent: -50,
  opacity: 0,
})
gsap.from(".care_block", {
  scrollTrigger: {
    trigger: ".daisy__inner",
    start: "top top",
    scrub: true,
  },
  scale: 0,
  yPercent: -50,
})
gsap.from(".daisy2__title", {
  scrollTrigger: {
    trigger: ".daisy2",
    start: "top bottom",
    scrub: true,
  },
  scale: 0,
  yPercent: -50,
  opacity: 0,
})
gsap.from(".join__item", {
  scrollTrigger: {
    trigger: ".daisy2",
    start: "top top",
    scrub: true,
  },
  xPercent: -50,
  opacity: 0,
})
gsap.from(".map", {
  scrollTrigger: {
    trigger: ".join-text",
    start: "top top",
    scrub: true,
  },
  scale: 0,
  transformOrigin: "top center",
  stagger: 0.1,
});











