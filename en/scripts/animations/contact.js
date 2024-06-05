// Enregistrer le plugin ScrollTrigger avec GSAP
gsap.registerPlugin(ScrollTrigger);

gsap.from('header',{ 
    duration :1.5,
    opacity: 0,
    scrollTrigger:{
                trigger : "header",
                toggleActions : 'restart none none none'
     }
  
})

gsap.from('.one-info',{ 
    duration :2,
    opacity: 0,
    y:50,
    stagger:0.5,
    scrollTrigger:{
                trigger : ".all-infos",
                toggleActions : 'restart none none none'
     }
  
})