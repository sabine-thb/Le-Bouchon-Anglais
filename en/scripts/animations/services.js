// Enregistrer le plugin ScrollTrigger avec GSAP
gsap.registerPlugin(ScrollTrigger);

gsap.from('.header-link',{ 
    duration :2,
    opacity: 0,
    stagger:0.5,
    scrollTrigger:{
                trigger : "header",
                toggleActions : 'restart none none none'
     }
  
})

gsap.from('.jure-logos img',{ 
    duration :2,
    opacity: 0,
    stagger:0.5,
    scrollTrigger:{
                trigger : ".jure-logos",
                toggleActions : 'restart none none none'
     }
  
})

gsap.from('.jure-img div',{ 
    duration :2,
    opacity: 0,
    stagger:0.5,
    y:100,
    scrollTrigger:{
                trigger : ".jure-img",
                toggleActions : 'restart none none none'
     }
  
})

gsap.from('.advice',{ 
    duration :1.5,
    opacity: 0,
    stagger:0.5,
    y:50,
    scrollTrigger:{
                trigger : ".sell-advices",
                toggleActions : 'restart none none none'
     }
  
})

gsap.from('.coaching-img',{ 
    duration :1.5,
    opacity: 0,
    x:-300,
    scrollTrigger:{
                trigger : ".coaching",
                toggleActions : 'restart none none none'
     }
  
})

gsap.from('.coaching-text',{ 
    duration :1.5,
    opacity: 0,
    scrollTrigger:{
                trigger : ".coaching",
                toggleActions : 'restart none none none'
     }
  
})

gsap.from('.traduction-img',{ 
    duration :1.5,
    opacity: 0,
    x:300,
    scrollTrigger:{
                trigger : ".traduction",
                toggleActions : 'restart none none none'
     }
  
})

gsap.from('.traduction-text',{ 
    duration :1.5,
    opacity: 0,
    scrollTrigger:{
                trigger : ".traduction",
                toggleActions : 'restart none none none'
     }
  
})