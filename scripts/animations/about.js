// Enregistrer le plugin ScrollTrigger avec GSAP
gsap.registerPlugin(ScrollTrigger);

gsap.from('header',{ 
    duration :1.5,
    opacity: 0,
    stagger:0.5,
    scrollTrigger:{
                trigger : "header",
                toggleActions : 'restart none none none'
     }
  
})


gsap.from('.story-img',{ 
    duration :1.5,
    opacity: 0,
    x:-300,
    scrollTrigger:{
                trigger : ".sory",
                toggleActions : 'restart none none none'
     }
  
})

gsap.from('.wset-text',{ 
    duration :1.5,
    opacity: 0,
    scrollTrigger:{
                trigger : ".wset",
                toggleActions : 'restart none none none'
     }
  
})

gsap.from('.wset-img',{ 
    duration :1.5,
    opacity: 0,
    x:300,
    scrollTrigger:{
                trigger : ".wset",
                toggleActions : 'restart none none none'
     }
  
})

gsap.from('.story-text',{ 
    duration :1.5,
    opacity: 0,
    scrollTrigger:{
                trigger : ".story",
                toggleActions : 'restart none none none'
     }
  
})