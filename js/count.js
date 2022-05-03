var noti = document.querySelector('h1');

/* <h1>
<span>
<img src="./images/bag.png" height="24px" alt="" />
        <!-- celkova cena produktu v kosiku-->
  </h1> */

	var select = document.querySelector('.select');
	var button = document.getElementsByTagName('button');
    //  <button>Do košíku</button>
	for(var but of button){
		but.addEventListener('click', (e)=>{
			var add = Number(noti.getAttribute('data-count') || 0);
			noti.setAttribute('data-count', add +1);
			noti.classList.add('zero')

			if (clone) {
				noti.onclick = ()=>{
					select.classList.toggle('display');
				}	
			}
		})
	}
	