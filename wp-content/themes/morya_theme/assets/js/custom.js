const target = document.querySelectorAll('[data-anime]');
const sectionHeader = document.getElementById('section_header');
const animationClass = 'animate';

function animeScroll() {
    const windowTop = window.pageYOffset + ((window.innerHeight * 3) / 4);
    target.forEach((e)=> {
        if((windowTop) > e.offsetTop) {
            e.classList.add(animationClass);
        }
        else {
            e.classList.remove(animationClass);
        }
        if(windowTop == 492.75) {
            sectionHeader.classList.add('header_full')
        } 
                    

    })
}

window.addEventListener('scroll', () => {animeScroll()})