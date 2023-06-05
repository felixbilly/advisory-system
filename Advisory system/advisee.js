const inputText = document.querySelector('#txt');
const myButton = document.querySelector('.btn-list');
const list = document.querySelector('.container ul');

//localStorage.setItem('todo',inputText.value);

myButton.addEventListener('click',(e)=>{
    if(inputText.value != ""){
        e.preventDefault();

        //create li

        const myLi = document.createElement('li');
        myLi.innerHTML = inputText.value;
        list.appendChild(myLi);
      //  localStorage.setItem("myLii",list.appendChild(myLi));

        //create span
        const mySpan = document.createElement('span');
        mySpan.innerHTML = 'x';
        myLi.appendChild(mySpan);

    }
    const close = document.querySelectorAll('span');
    for(let i =0; i<close.length; i++){
        close[i].addEventListener('click', ()=>{
            close[i].parentElement.style.opacity = 0;
            setTimeout(()=>{
                close[i].parentElement.style.display = "none";

            },500);
    
        })
        
    }
    localStorage.setItem('list',inputText.value);
    inputText.value = "";
});
myButton.addEventListener('click',()=>{
    localStorage.setItem('todo',inputText.value);

})
