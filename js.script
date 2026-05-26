// SEARCH ENGINE

const searchInput = document.getElementById("searchInput");

searchInput.addEventListener("keyup", function(){

let filter = searchInput.value.toLowerCase();

let songs = document.querySelectorAll(".song");

songs.forEach(song => {

let text = song.innerText.toLowerCase();

if(text.includes(filter)){
song.style.display = "block";
}else{
song.style.display = "none";
}

});

});

// LOAD MORE

const loadMoreBtn = document.getElementById("loadMore");

loadMoreBtn.addEventListener("click", function(){

let hiddenSongs = document.querySelectorAll(".hidden");

for(let i = 0; i < 6 && i < hiddenSongs.length; i++){

hiddenSongs[i].classList.remove("hidden");

}

if(document.querySelectorAll(".hidden").length === 0){
loadMoreBtn.style.display = "none";
}

});
