// Enregistrer le plugin ScrollTrigger avec GSAP
gsap.registerPlugin(ScrollTrigger);

gsap.from('.one-para',{ 
    duration: 1,
    opacity: 0,
    stagger:0.8, 
    scrollTrigger:{
                trigger : "section",
                toggleActions : 'restart none none none'
                
     }
     
  
})

gsap.from('header',{ 
    duration: 1,
    opacity: 0,
    scrollTrigger:{
                trigger : "header",
                toggleActions : 'restart none none none'
                
     }
     
  
})