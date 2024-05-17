const addQuantities = document.querySelectorAll('.add_quantity')
const subQuantities = document.querySelectorAll('.sub_quantity')
const numberQuantity = document.querySelectorAll('.number_quantity')
const priceProduct = document.querySelectorAll('.price__product-cart')
const totalProduct = document.querySelectorAll('.total__product-cart')

let counts = Array.from({ length: addQuantities.length }, () => 1);
console.log(counts)

addQuantities.forEach( (addQuantity, index ) => {
    addQuantity.addEventListener('click', ()=>{    
        counts[index] ++
        numberQuantity[index].innerHTML = counts[index]
        var total = parseInt(priceProduct[index].textContent) * counts[index]
        totalProduct[index].innerHTML = total.toString()
    })
});

subQuantities.forEach((subQuantity, index) => {
    subQuantity.addEventListener('click', ()=>{
        if(counts[index] >= 2 ){
            counts[index] --
        }
        numberQuantity[index].innerHTML = counts[index]
        var total = parseInt(priceProduct[index].textContent) * counts[index]
        totalProduct[index].innerHTML = total.toString()
    })
})








