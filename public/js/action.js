let img_Main  = document.getElementById('main_img_Advertisement');
let img_Item = document.querySelectorAll('.item_img_Advertisement');
console.log(img_Item);
console.log(img_Main);
let dem=0;
let lastItem = img_Item[0];
 setInterval(change,2000);  
//    for(let i=0; i<img_Item.length; i++){
//         img_Item[i].onclick = function(){
//             img_Main.src = img_Item[i].src;
//             dem = i;
//             console.log(dem);
//             clearInterval(Interval);
//             Interval = setInterval(change,2000);

//         }
        
//    }

function change(){
    dem++;
    if(dem == img_Item.length){
        dem=0
    };
    lastItem = img_Item[dem];
    img_Main.src = lastItem.src
   
}

console.log(dem);
//setInterval(change, 1000);

// console.log(change);
let scrollDanhMuc = document.querySelector('.galleryItem');
let backScroll = document.querySelector('.selectionBackLeft')
let nextScroll = document.querySelector('.selectionBackRight')
console.log(scrollDanhMuc);

// scrollDanhMuc.addEventListener("wheel",(evt)=>{
//     evt.preventDefault();
//     scrollDanhMuc.scrollLeft += evt.deltaX;
// })

backScroll.addEventListener('click',()=>{
    scrollDanhMuc.scrollLeft -= 1205;
})

nextScroll.addEventListener('click',()=>{
    scrollDanhMuc.scrollLeft += 1205;
})

let scrollFlashSale = document.querySelector('.menuSaleItem');
let backScrollFlashSale = document.querySelector('.flashSaleBackLeft')
let nextScrollFlashSale = document.querySelector('.flashSaleBackRight')
console.log(scrollDanhMuc);

backScrollFlashSale.addEventListener('click',()=>{
    scrollFlashSale.scrollLeft -= 1205;
})

nextScrollFlashSale.addEventListener('click',()=>{
    scrollFlashSale.scrollLeft += 1205;
})


let hourFlashSale = document.querySelector('.hourFlashSale');
let minuteFlashSale = document.querySelector('.minuteFlashSale');
let secondFlashSale = document.querySelector('.secondFlashSale');
function timeFlashSale(){
    let today = new Date();
    let hour = today.getHours();
    let minute = today.getMinutes();
    let second = today.getSeconds();
    if(hour > 12){
        hour = hour-12;
    }
    if(hour<10){
        hour = "0"+hour;
    }
    if(minute<10){
        minute = "0"+minute;
    }
    if(second<10){
        second = "0"+second;
    }
    hourFlashSale.innerHTML = hour;
    minuteFlashSale.innerHTML = minute;
    secondFlashSale.innerHTML = second;

    setTimeout("timeFlashSale()",1000);
}
setTimeout(timeFlashSale,1000);

let mainMallShoppe = document.querySelector('.menuMallSelectionBackShoppe');

let backMall = document.querySelector('.flashSaleBackLeftMall');
let nextMall = document.querySelector('.flashSaleBackRightMall');

backMall.addEventListener('click',()=>{
    mainMallShoppe.scrollLeft -= 400.2;
});
nextMall.addEventListener('click',()=>{
    mainMallShoppe.scrollLeft += 400.2;
});




let mainMallImg = document.getElementById('mainMallImg');

let itemMallImg = document.querySelectorAll('.itemMallImg');
 
let lastItemMall = itemMallImg[0];

let count=0;
setInterval(changeMall,3000);

function changeMall(){
    count++;
    if(count == itemMallImg.length){
        count=0;
    };
    lastItemMall = itemMallImg[count];
    mainMallImg.src = lastItemMall.src;
    

}


// const hoverLink = document.querySelectorAll('.linkItemMenuMainProduct');

// const sptuongtu = hoverLink.querySelector('.kMhy');

console.log(hoverLink);

// console.log(sptuongtu);
let d = 0;
for(let i=0; i<hoverLink.length; i++){
    hoverLink[i].addEventListener("mouseover", ()=>{
        let sptuongtu = hoverLink[i].querySelector('.kMhy');
        console.log(sptuongtu)
        sptuongtu.classList.add('hoverLin');
       
    })
    hoverLink[i].addEventListener("mouseout", ()=>{
        let sptuongtu = hoverLink[i].querySelector('.kMhy');

        sptuongtu.classList.remove('hoverLin');
       
    })
    
};

 













