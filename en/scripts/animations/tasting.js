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

gsap.from('.tasting-type',{ 
    duration :2,
    opacity: 0,
    stagger:0.5,
    y:100,
    scrollTrigger:{
                trigger : ".tasting-type-container",
                toggleActions : 'restart none none none'
     }
  
})

gsap.from('.one-skill',{ 
    duration :2,
    opacity: 0,
    stagger:0.5,
    y:50,
    scrollTrigger:{
                trigger : ".learning-container",
                toggleActions : 'restart none none none'
     }
  
})

gsap.from('.themes-img',{ 
    duration :1.5,
    opacity: 0,
    x:-300,
    scrollTrigger:{
                trigger : ".themes",
                toggleActions : 'restart none none none'
     }
  
})

gsap.from('.themes-text',{ 
    duration :2,
    opacity: 0,
    scrollTrigger:{
                trigger : ".themes",
                toggleActions : 'restart none none none'
     }
  
})




