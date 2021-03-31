  const targetElement = document.querySelectorAll(".contents");
  console.log(targetElement);



  document.addEventListener("scroll",function(){
    console.log("画面の高さ",window.innerHeight);
    for(let i=0;i<targetElement.length;i++){
        const getElementDistance=targetElement[i].getBoundingClientRect().top+targetElement[i].clientHeight*0.6;
        
        if(i===1){
            console.log(getElementDistance);
        }   

        if(window.innerHeight>getElementDistance){
            targetElement[i].classList.add("show");
        }
    }
  })

  

  