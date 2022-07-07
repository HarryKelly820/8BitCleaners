var cleanshop = document.getElementById('tap-to-clean-shop');

cleanshop.addEventListener('click', function(cleanshop){
    cleanshop.target.classList.toggle('shopfront-clean');
});

var cleanhouse = document.getElementById('tap-to-clean-house');

cleanhouse.addEventListener('click', function(cleanhouse){
    cleanhouse.target.classList.toggle('house-clean');
})