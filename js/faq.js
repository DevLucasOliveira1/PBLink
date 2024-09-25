var iconFaq = document.querySelectorAll('.icon-faq');
var boxFaq = document.querySelectorAll('.faq-box-single-content');

iconFaq.forEach((buttonFaq, indexFaq) => {
	buttonFaq.addEventListener('click', ()=>{

		if(boxFaq[indexFaq].classList.contains('faq-box-single-content-active')){

			boxFaq[indexFaq].classList.remove('faq-box-single-content-active')
			iconFaq[indexFaq].classList.remove('icon-faq-active');


		} else {

			boxFaq[indexFaq].classList.add('faq-box-single-content-active')
			iconFaq[indexFaq].classList.add('icon-faq-active')

		}

	})
})