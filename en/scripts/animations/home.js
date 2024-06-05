// Enregistrer le plugin ScrollTrigger avec GSAP
gsap.registerPlugin(ScrollTrigger);

gsap.from('.sloggan',{ 
    duration :1.5,
    opacity: 0,
    x: -150,
    scrollTrigger:{
                trigger : "header",
                toggleActions : 'restart none none none'
     }
  
})

gsap.from('.intro h2, .intro p',{ 
    duration :1.5,
    opacity: 0,
    scrollTrigger:{
                trigger : ".intro",
                toggleActions : 'restart none none none'
     }
  
})


gsap.from('.felicity',{ 
    duration :1.5,
    x:300,
    opacity: 0,
    scrollTrigger:{
                trigger : ".presentation",
                toggleActions : 'restart none none none'
     }
  
})

gsap.from('.tasting-text',{ 
    duration :2,
    opacity: 0,
    scrollTrigger:{
                trigger : ".tasting-section",
                toggleActions : 'restart none none none'
     }
  
})

gsap.from('.tasting-link',{ 
    duration: 1,
    opacity: 0,
    stagger:0.5, 
    scrollTrigger:{
                trigger : ".tasting-background",
                toggleActions : 'restart none none none'
                
     }
     
  
})

gsap.from('.one-service',{ 
    duration: 2,
    opacity: 0,
    stagger:0.5, 
    y:100,
    scrollTrigger:{
                trigger : ".services-flex",
                toggleActions : 'restart none none none'
                
     }
     
  
})

gsap.from('.img',{ 
    duration: 2,
    opacity: 0,
    stagger:0.5, 
    scrollTrigger:{
                trigger : ".images",
                toggleActions : 'restart none none none'
                
     }
     
  
})


