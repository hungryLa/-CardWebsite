function closeOnBackDropClick({currentTarget, target}) {
    const dialogElement = currentTarget
    const isClickedOnBackDrop = target === dialogElement
    if (isClickedOnBackDrop) {
        dialogElement.close()
        document.body.classList.remove('scroll-disabled');
    }
}

// MENU
const burgerButton = document.querySelector('.header__burger');
const menu = document.querySelector('.menu');
burgerButton.addEventListener('click', () => {
    burgerButton.classList.toggle('header__burger-active');
    menu.classList.toggle('menu-active');
})

// FORM
const nameInput = document.querySelector('.connect__input-name');
const emailInput = document.querySelector('.connect__input-email');
const phoneInput = document.querySelector('.connect__input-phone');

const nameError = document.querySelector('.connect__input__error-name');
const emailError = document.querySelector('.connect__input__error-email');
const phoneError = document.querySelector('.connect__input__error-phone');

const formDialog = document.querySelector('#form-dialog');
const formDialogText = document.querySelector('.form-dialog__text')


const phoneMaskOptions = {
    mask: '+{7} (000) 000-00-00',
    lazy: true,
}

IMask(phoneInput, phoneMaskOptions);

nameInput.addEventListener('change', () => {
    nameError.style.display = 'none'
})

emailInput.addEventListener('change', () => {
    emailError.style.display = 'none'
})

phoneInput.addEventListener('change', () => {
    phoneError.style.display = 'none'
})

const form = document.querySelector('.connect__form');
form.addEventListener('submit', async (e) => {
    e.preventDefault();

    formDialogText.textContent = ''

    const isValidName = nameInput.value.length > 2;
    const isValidEmail = /([a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z0-9_-]+)/.test(emailInput.value);
    const isValidPhone = phoneInput.value.length === 18;


    if (!isValidName) {
        nameError.textContent = 'Имя введено некорректно';
        nameError.style.display = 'block';
    }

    if (!isValidEmail) {
        emailError.textContent = 'Email введен некорректно';
        emailError.style.display = 'block';
    }

    if (!isValidPhone) {
        phoneError.textContent = 'Телефон введен некорректно';
        phoneError.style.display = 'block';
    }

    if (isValidName && isValidEmail && isValidPhone) {
        const response = await fetch('/api/sendMail', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                phone: phoneInput.value,
                name: nameInput.value,
                email: emailInput.value
            })
        })


        const {message} = await response.json()


        if (response.status === 200) {
            formDialog.showModal()
            phoneInput.value = "";
            nameInput.value = "";
            emailInput.value = "";
            document.body.classList.add('scroll-disabled');
            formDialogText.textContent = message
        }
    }
})

formDialog.addEventListener('click', closeOnBackDropClick)

// GALLERY
const galleryTriggers = document.querySelectorAll('.connect__gallery__item');
const galleryDialog = document.querySelector('#gallery-dialog');

document.body.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        document.body.classList.remove('scroll-disabled');
    }
})

galleryTriggers.forEach((trigger, index) => {
    trigger.addEventListener('click', (e) => {
        galleryDialog.showModal();
        document.body.classList.add('scroll-disabled');
    })
})

galleryDialog.addEventListener('click', closeOnBackDropClick)

const splide = new Splide('#image-carousel', {
    type: 'loop',
    perPage: 1,
    pagination: true
});

splide.mount();
