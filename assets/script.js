

document.addEventListener('DOMContentLoaded', () => {
    const cardData = [
        {
            title : "Privatisation",
            delay : 0,
            duration : 1000
        },  
        
        {
            title : "AfterWork",
            delay : 500,
            duration : 1000
        },
        
        { 
            title : "Séminaires",
            delay : 1000,
            duration : 1000
        },
        
        {
            title : "Infos Pratiques",
            delay : 1500,
            duration : 1000
        },
        
    ];
    
    const cards= document.getElementById('cards');
    
    cardData.forEach((data) => {
        const card = document.createElement('div');
        card.classList.add('card');
        card.style.width = "18rem";
        card.style.padding = "1rem";
        card.setAttribute('data-aos', 'fade-up');
        card.setAttribute('data-aos-delay', data.delay);
        card.setAttribute('data-aos-duration', data.duration);
        
        /*cardBody = document.createElement('div');
        cardBody.classList.add('card-body');*/
        
        cardTitle = document.createElement('h5');
        cardTitle.classList.add('card-title');
        cardTitle.className = "card-title";
        cardTitle.textContent = data.title;
        
        /*         cardText = document.createElement('p');
        cardText.classList.add('card-text');
        */
       /*card.appendChild(cardBody);*/
       card.appendChild(cardTitle);
       /* card.appendChild(cardText); */
       cards.appendChild(card);
    });
    
    AOS.init();
});
