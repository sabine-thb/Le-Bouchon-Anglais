// Enregistrer le plugin ScrollTrigger avec GSAP
gsap.registerPlugin(ScrollTrigger);

gsap.from('.footer-links-container img',{ 
    duration: 2,
    opacity: 0,
    stagger:0.5, 
    scrollTrigger:{
                trigger : ".footer-links-container",
                toggleActions : 'restart none none none'
                
     }
     
  
})