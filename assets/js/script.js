const dateElement = document.getElementById('date-display');

const getCurrenDate = () => {
    const date = new Date();
    const options = {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    };

    return date.toLocaleDateString('en-PH', options);
}

dateElement.innerText = getCurrenDate();