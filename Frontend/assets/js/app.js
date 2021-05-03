gsap.registerPlugin(ScrollTrigger);

gsap.from('.animate-hero',{
    duration:1.2,
    opacity: 0,
    y:-150,
    stagger:0.3
});

gsap.from('.animate-services',{
    ScrollTrigger:'.animate-services',
    duration:2.6,
    opacity: 1,
    x:-150,
    stagger:0.12
});

gsap.from('.animate-img',{
    ScrollTrigger:'.animate-img',
    duration:4.2,
    opacity: 0,
    x:-200
});

gsap.from('.animate-membership',{
    ScrollTrigger:'.animate-membership',
    duration:6.2,
    opacity: 0,
    y:-150,
    stagger:0.3,
    delay: 0.5
});

gsap.from('.animate-card',{
    ScrollTrigger:'.animate-card',
    duration:8.2,
    opacity: 0,
    y:-150,
    stagger:0.1,
    delay: 0.2
});

gsap.from('.animate-team',{
    ScrollTrigger:'.animate-team',
    duration:5.2,
    opacity: 0,
    y:-150,
    stagger:0.3,
    delay: 0.2
});

gsap.from('.animate-email',{
    ScrollTrigger:'.animate-email',
    duration:8.8,
    opacity: 0,
    x:-150,
    stagger:0.25,
    delay: 1
});