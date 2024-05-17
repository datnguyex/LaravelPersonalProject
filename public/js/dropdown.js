const dropdown = document.querySelectorAll('.category-item__list')

let counts = Array.from({ length: dropdown.length }, () => 1);

dropdown.forEach(element => {
    element.addEventListener('click', () => {
        const category = element.querySelectorAll('.list-item');
        const rotate = element.querySelector('.rotate__dropdown')
        category.forEach(item => {
            if (item.style.display == "block") {
                item.style.display = "none";
            }
            else {
                item.style.display = "block";
            }
        });
        
        if (rotate.style.transform == "rotate(180deg)") {
            rotate.style.transform = "rotate(0deg)"
        }
        else {
            rotate.style.transform = "rotate(180deg)"
        }

    });
});


