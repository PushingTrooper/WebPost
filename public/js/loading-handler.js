const overlayDiv = document.querySelector('#loading-overlay-container');
function showLoading() {
    if(overlayDiv.classList.contains('inactive')) {
        overlayDiv.classList.remove('inactive');
        overlayDiv.classList.add('active');
    } else if(!overlayDiv.classList.contains('active')) {
        overlayDiv.classList.add('active');
    }
}
function hideLoading() {
    if(overlayDiv.classList.contains('active')) {
        overlayDiv.classList.remove('active');
        overlayDiv.classList.add('inactive');
    } else if(!overlayDiv.classList.contains('inactive')) {
        overlayDiv.classList.add('inactive');
    }
}