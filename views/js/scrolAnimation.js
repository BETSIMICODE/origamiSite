let scrolAnim=document.querySelectorAll('.scrolAnim');
window.onscroll=()=>{
   
    scrolAnim.forEach(sAnim=>{
        let topS=window.scrollY;
        let offsetS=sAnim.offsetTop;
        if (topS >= offsetS - 500){
            sAnim.classList.add('showAnimation');
        }
    })
}