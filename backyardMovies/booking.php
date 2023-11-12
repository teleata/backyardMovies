<html lang="en">
    <style>
* {
  margin: 0;
}

body {
  font-family: "Roboto", sans-serif;
}

.navbar {
  width: 100%;
  height: 50px;
  background-color: black;
  position: sticky;
  top: 0;
}

.navbar-container {
  display: flex;
  align-items: center;
  padding: 0 50px;
  height: 100%;
  color: white;
  font-family: "Sen", sans-serif;
}

.logo-container {
  flex: 1;
}

.logo {
  font-size: 30px;
  color: #4dbf00;
}

.menu-container {
  flex: 6;
}

.menu-list {
  display: flex;
  list-style: none;
}

.menu-list-item {
  margin-right: 30px;
}

.menu-list-item.active {
  font-weight: bold;
}

.toggle {
  width: 40px;
  height: 20px;
  background-color: white;
  border-radius: 30px;
  display: flex;
  align-items: center;
  justify-content: space-around;
  position: relative;
}

.toggle-icon {
  color: goldenrod;
}

.toggle-ball {
  width: 18px;
  height: 18px;
  background-color: black;
  position: absolute;
  right: 1px;
  border-radius: 50%;
  cursor: pointer;
  transition: 1s ease all;
}

.toolbar {
  width: 50px;
  height: 100%;
  background-color: black;
  position: fixed;
  top: 0;
  display: flex;
  flex-direction: row;
  align-items: left;
  padding-top: 60px;
  color: white;
}

.left-menu-icon {
  color: white;
  font-size: 20px;
  margin-bottom: 40px;
  
}

.container {
  background-color: #151515;
  min-height: calc(100vh - 50px);
  color: white;
}

.content-container {
  margin-left: 80px;
}

.featured-content {
  height: 50vh;
  padding: 50px;
}

.featured-title {
  width: 200px;
}

.featured-desc {
  width: 500px;
  color: lightgray;
  margin: 30px 0;
}

.featured-button {
  background-color: #4dbf00;
  color: white;
  padding: 10px 20px;
  border-radius: 10px;
  margin-bottom: 30px;
  border: none;
  outline: none;
  font-weight: bold;
}

.movie-list-container {
  padding: 0 20px;
}

.movie-list-wrapper {
  position: relative;
  overflow: hidden;
}

.movie-list {
  display: flex;
  align-items: center;
  height: 300px;
  transform: translateX(0);
  transition: all 1s ease-in-out;
}

.movie-list-item {
  margin-right: 30px;
  position: relative;
}

.movie-list-item:hover .movie-list-item-img {
  transform: scale(1.2);
  margin: 0 30px;
  opacity: 0.5;
}

.movie-list-item:hover .movie-list-item-title,
.movie-list-item:hover .movie-list-item-desc,
.movie-list-item:hover .movie-list-item-button {
  opacity: 1;
}

.movie-list-item-img {
  transition: all 1s ease-in-out;
  width: 270px;
  height: 200px;
  object-fit: cover;
  border-radius: 20px;
}

.movie-list-item-title {
  background-color: #333;
  padding: 0 10px;
  font-size: 32px;
  font-weight: bold;
  position: absolute;
  top: 10%;
  left: 50px;
  opacity: 0;
  transition: 1s all ease-in-out;
}

.movie-list-item-desc {
  background-color: #333;
  padding: 10px;
  font-size: 14px;
  position: absolute;
  top: 30%;
  left: 50px;
  width: 230px;
  opacity: 0;
  transition: 1s all ease-in-out;
}

.movie-list-item-button {
  padding: 10px;
  background-color: #4dbf00;
  color: white;
  border-radius: 10px;
  outline: none;
  border: none;
  cursor: pointer;
  position: absolute;
  bottom: 30px;
  left: 50px;
  opacity: 0;
  transition: 1s all ease-in-out;
}

.container.active {
  background-color: white;
}

.movie-list-title.active {
  color: black;
}

.navbar-container.active {
  background-color: white;

  color: black;
}

.toolbar.active{
    background-color: white;
}

.left-menu-icon.active{
    color: black;
}

.toggle.active{
    background-color: black;
}

@media only screen and (max-width: 940px){
    .menu-container{
        display: none;
        background-repeat: no-repeat;
    }

}
footer {
    text-align: center;
    background-color:green;
    color: none;
    padding: 30px 0;

}
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Home Page</title>
</head>

<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <h1 class="logo">JAMROCK</h1>
            </div>
            <header>
        <h1>Welcome to Movie Ticket Booking</h1>
    </header>
            <div>       
        <ul><ul>
        <div class="menu-list"> <ul>
            <i><button class="menu-list-item"<echo class="php"></echo><a href="cinematimes.php">Find Movies</a></i>
            <i><button class="menu-list-item"<echo class="php"></echo><a href="loginpage.php">Sign In</a></i>
            <i><button class="menu-list-item"<echo class="php"></echo><a href="customer.php">Sign Up</a></i>
           </ul>
            <form action="cinematimes.php" method="GET">
            <label for="search">Search for a Movie:</label>
            <input type="text" id="search" name="search" placeholder="Search by movie title or genre">
            <button type="submit">Search</button>
        </ul></ul>
        </form>
        </div>
        </div>     
    <div class="toolbar">
        <i class="list-menu-icon fas fa-home"></i>
    </div>
    <div class="container">
        
        <div class="content-container">
            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/john-wick-chapter-4.jpg');">
                <iframe width="460" height="300" src="https://www.youtube.com/embed/qEVUtrk8_B4" frameborder="0" allowfullscreen></iframe>
                <p class="featured-desc">With the price on his head ever increasing, 
                            legendary hit man John Wick takes his fight against the High
                             Table.</p>
                <span class="ticket-cost">Ticket Cost: $1200.00</span>  
                <button><a class="book-button" href="seat.php?id=1 & cost= 1200">Book Now</a></button><br> 
                
            </div>
            <br><div class="movie-list-container">
                <br><br><h1 class="movie-list-title">NOW SHOWING</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                    <div class="movie-list-item">
                    <img class="movie-list-item-img" src="img/Men in Black 4.jpg" alt="">
                    <span class="movie-list-item-title">Men in Black 4</span>
                    <p class="movie-list-item-desc">Based off of the comic book.</p>
                    <br>
                    <iframe class="movie-list-item-button" width="260" height="160" src="https://www.youtube.com/embed/BV-WEb2oxLk" frameborder="0" allowfullscreen>Watch</iframe>
                    <br>
                    <span class="ticket-cost">Ticket Cost: $1000.00</span> 
                    <br>
                    <button><a class="book-button" href="seat.php?id=1 & cost= 1000 ">Book Now</a></button><br> 
                </div>

                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/2.jpeg" alt="">
                            <span class="movie-list-item-title">Star Wars</span>
                            <p class="movie-list-item-desc">In the riveting conclusion of the landmark Skywalker saga, 
                                new legends will be born-and the final battle for freedom is yet to come.</p>
                            <button class="movie-list-item-button">Watch</button><br>
                            <br>
                                <span class="ticket-cost">Ticket Cost: $800.00</span> 
                            <br>
                            <button><a class="book-button" href="seat.php?id=1 & cost= 800">Book Now</a></button><br>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/3.jpg" alt="">
                            <span class="movie-list-item-title">X-Men</span>
                            <p class="movie-list-item-desc">The human government develops a cure for mutations,
                                 and Jean Gray becomes a darker uncontrollable persona called the Phoenix who allies with Magneto, 
                                causing escalation into an all-out battle for the X-Men.</p>
                            <button class="movie-list-item-button">Watch</button><br>
                            <br>
                                <span class="ticket-cost">Ticket Cost: $700.00</span> 
                            <br>
                            <button><a class="book-button" href="seat.php?id=1 & cost= 700">Book Now</a></button><br>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/17.jpg" alt="">
                            <span class="movie-list-item-title">Aquaman</span>
                            <p class="movie-list-item-desc">Arthur must enlist the help of his half-brother Orm in order to protect Atlantis against Black Manta,
                               who has unleashed a devastating weapon in his obsessive quest to avenge his father's death..</p>
                               <iframe class="movie-list-item-button"  width="250" height="160" src="https://www.youtube.com/embed/FV3bqvOHRQo" frameborder="0" allowfullscreen>Watch</iframe><br>
                                <br>
                                    <span class="ticket-cost">Ticket Cost: $1000.00</span> 
                                <br>
                                <button><a class="book-button" href="seat.php?id=1 & cost= 1000">Book Now</a></button><br>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/5.jpg" alt="">
                            <span class="movie-list-item-title">Avengers</span>
                            <p class="movie-list-item-desc">After Thanos, an intergalactic warlord, disintegrates half of the universe,
                                 the Avengers must reunite and assemble again to reinvigorate their trounced allies 
                                 and restore balance.</p>
                            <button class="movie-list-item-button">Watch</button><br>
                            <br>
                                <span class="ticket-cost">Ticket Cost: $1100.00</span> 
                            <br>
                            <button><a class="book-button" href="seat.php?id=1 & cost= 1100">Book Now</a></button><br><br>
                        </div><br><br><br>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/53.jpg" alt="">
                            <span class="movie-list-item-title">The Woman King</span>
                            <p class="movie-list-item-desc">After provoking the empire of Oyo by liberating enslaved women, 
                                General Nanisca prepares to face the wrath along with an all-women army of her own.</p>
                            <iframe class="movie-list-item-button"  width="250" height="160" src="https://www.youtube.com/embed/3RDaPV_rJ1Y" frameborder="0" allowfullscreen>Watch</iframe><br>
                            <br>
                                <span class="ticket-cost">Ticket Cost: $1500.00</span> 
                            <br>
                            <button><a class="book-button" href="seat.php?id=1 & cost= 1500">Book Now</a></button><br><br>
                        </div><br><br><br>
            </div>
            <div class="movie-list-container"><br>
                <h1 class="movie-list-title">ACTION MOVIES</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/6.jpg" alt="">
                            <span class="movie-list-item-title">Rampage</span>
                            <p class="movie-list-item-desc">When three different animals become infected with a dangerous pathogen, 
                                a primatologist and a geneticist team up to stop them from destroying Chicago.</p>
                            <button class="movie-list-item-button">Watch</button><br>
                            <br>
                                <span class="ticket-cost">Ticket Cost: $1000.00</span> 
                            <br>
                            <button><a class="book-button" href="seat.php?id=1 & cost= 1000">Book Now</a></button><ul>
                        </div><br>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/9.jpg" alt="">
                            <span class="movie-list-item-title">Wednesday</span>
                            <p class="movie-list-item-desc">Follows Wednesday Addams' years as a student, 
                                when she attempts to master her emerging psychic ability, thwart a killing spree, 
                                and solve the mystery that embroiled her parents.</p>
                            <button class="movie-list-item-button">Watch</button><br>
                            <br>
                                <span class="ticket-cost">Ticket Cost: $1000.00</span> 
                            <br>
                            <button><a class="book-button" href="seat.php?id=1 & cost= 1000">Book Now</a></button><br>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/fast_and_the_furious_4.jpeg" alt="">
                            <span class="movie-list-item-title">Fast & Furious 4</span>
                            <p class="movie-list-item-desc">Dominic Toretto, an ex-convict, and an FBI agent, Brian O'Connor, 
                              wish to take down heroin importer, Arturo Braga. However, they must team up and overcome their distrust to be successful.</p>
                            <iframe class="movie-list-item-button"  width="260" height="160" src="https://www.youtube.com/embed/BCg9R_MGZKg" frameborder="0" allowfullscreen>Watch</iframe><br>
                                <br>
                                <span class="ticket-cost">Ticket Cost: $1000.00</span> 
                                <br>
                            <button><a class="book-button" href="seat.php?id=1 & cost= 1000">Book Now</a></button><br>
                        </div>
                        <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/ipman.jpeg" alt="">
                            <span class="movie-list-item-title">IPMan 4</span>
                            <p class="movie-list-item-desc">Ip Man, a Kung Fu master, travels to the United States in order to rescue 
                              his student who has caused conflict within the martial arts community.</p>
                              <iframe class="movie-list-item-button"  width="250" height="160" src="https://www.youtube.com/embed/f40JahDi1Uc" frameborder="0" allowfullscreen>Watch</iframe><br>
                                <br>
                                    <span class="ticket-cost">Ticket Cost: $1300.00</span> 
                                <br>
                                <button><a class="book-button" href="seat.php?id=1 & cost= 1300">Book Now</a></button><br>
                        </div>
                        <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/den-1.jpeg" alt="">
                            <span class="movie-list-item-title">The Equalizer</span>
                            <p class="movie-list-item-desc">A man who believes he has put his mysterious past behind him cannot 
                              stand idly by when he meets a young girl under the control of ultra-violent Russian gangsters.</p>
                            <button class="movie-list-item-button">Watch</button><br>
                            <br>
                                <span class="ticket-cost">Ticket Cost: $1400.00</span> 
                            <br>
                            <ul><button><a class="book-button" href="seat.php?id=1 & cost= 1400">Book Now</a></button><br></ul>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/mtx.jpg" alt="">
                            <span class="movie-list-item-title">The Matrix</span>
                            <p class="movie-list-item-desc">Neo, a computer programmer and hacker, has always
                                 questioned the reality of the world around him. His suspicions are confirmed when Morpheus, a rebel leader, 
                                 contacts him and reveals the truth to him.</p>
                            <iframe class="movie-list-item-button"  width="250" height="160" src="https://www.youtube.com/embed/9ix7TUGVYIo" frameborder="0" allowfullscreen>Watch</iframe><br>
                            <br>
                                <span class="ticket-cost">Ticket Cost: $1500.00</span> 
                            <br>
                            <button><a class="book-button" href="seat.php?id=1 & cost= 1500">Book Now</a></button><br><br>
                        </div><br><br>
            </div>
            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/p-20.jpg');">
                <iframe width="460" height="300" src="https://www.youtube.com/embed/55gmAtakjJ4" frameborder="0" allowfullscreen>Watch</iframe>
                <p class="featured-desc">Puss in Boots tries to steal magic beans from the infamous criminals Jack and Jill. 
                  The hero crosses paths with his female match, who leads Puss to his old friend, but now enemy, Humpty Dumpty..</p>   
               <ul> <button class="featured-button">WATCH</button>
               <br>
                    <span class="ticket-cost">Ticket Cost: $1000.00</span> 
                <br>
                <button><a class="book-button" href="seat.php?id=1 & cost= 1000">Book Now</a></button></ul>
            </div><br><br>
            <br><br><div class="movie-list-container"><br><br>
                <h1 class="movie-list-title">FAMILY MOVIES</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/ST-L.jpeg" alt="">
                            <span class="movie-list-item-title">Stuart Little</span>
                            <p class="movie-list-item-desc">Upon getting adopted by the Littles, Stuart the mouse is unwelcomed by his new brother George.
                               So, when Stuart begins to feel low the family helps him find his real parents.</p>
                            <button class="movie-list-item-button">Watch</button><br>
                            <br>
                                <span class="ticket-cost">Ticket Cost: $700.00</span> 
                            <br>
                            <button><a class="book-button" href="seat.php?id=1 & cost= 700">Book Now</a></button><br>
                        </div>
                        <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/11.jpg" alt="">
                            <span class="movie-list-item-title">Kick-Ass</span>
                            <p class="movie-list-item-desc">Dave Lizewski is an unnoticed high school student and comic book
                                 fan who one day decides to become a superhero, even though he has no powers, 
                                 training or meaningful reason to do so.</p>
                            <button class="movie-list-item-button">Watch</button><br>
                            <br>
                                <span class="ticket-cost">Ticket Cost: $660.00</span> 
                            <br>
                            <button><a class="book-button" href="seat.php?id=1 & cost= 660">Book Now</a></button><br>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/DM7.jpeg" alt="">
                            <span class="movie-list-item-title">Dennis Menace</span>
                            <p class="movie-list-item-desc">When his parents must go out of town on business, Dennis stays with Mr. and Mrs. Wilson. 
                              He is driving Mr. Wilson crazy, but he is just trying to be helpful, even to the thief who has arrived in town..</p>
                            <button class="movie-list-item-button">Watch</button><br>
                            <br>
                                <span class="ticket-cost">Ticket Cost: $500.00</span> 
                            <br>
                              <button><a class="book-button" href="seat.php?id=1 & cost= 500">Book Now</a></button><br>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/H3.jpeg" alt="">
                            <span class="movie-list-item-title">HOME ALONE 3</span>
                            <p class="movie-list-item-desc">The McCallister family is preparing to spend Christmas in Paris, 
                              gathering at Kate and Peter's home in a Chicago suburb on the night before their departure.</p>
                            <button class="movie-list-item-button">Watch</button><br>
                            <br>
                                <span class="ticket-cost">Ticket Cost: $1000.00</span> 
                            <br>
                            <button><a class="book-button" href="seat.php?id=1 & cost= 1000">Book Now</a></button><br>
                        </div>
                        <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/12.jpg" alt="">
                            <span class="movie-list-item-title">The Emoji Movie</span>
                            <p class="movie-list-item-desc">Gene, a multi-expressional emoji, sets out on a journey 
                                to become a normal emoji.</p>
                            <button class="movie-list-item-button">Watch</button><br>
                            <br>
                                <span class="ticket-cost">Ticket Cost: $500.00</span> 
                            <br>
                            <button><a class="book-button" href="seat.php?id=1 & cost= 500">Book Now</a></button><br>
                        </div>
                        <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/frozen-2.jpg" alt="">
                            <span class="movie-list-item-title">Frozen 2</span>
                            <p class="movie-list-item-desc">Three years after her coronation when Elsa celebrates Autumn, 
                                she hears a mysterious voice. She follows that voice along with Anna and
                                 their friends as they are forced to uncover the truth.</p>
                            <iframe class="movie-list-item-button"  width="250" height="160" src="https://www.youtube.com/embed/Zi4LMpSDccc"  frameborder="0" allowfullscreen>Watch</iframe><br>
                            <br>
                                <span class="ticket-cost">Ticket Cost: $800.00</span> 
                            <br>
                            <button><a class="book-button" href="seat.php?id=1 & cost= 800">Book Now</a></button><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">KIDS MOVIES</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/19.jpeg" alt="">
                            <span class="movie-list-item-title">Spider Man 3</span>
                            <p class="movie-list-item-desc">After Peter Parker is bitten by a genetically altered spider, he gains newfound, 
                              spider-like powers and ventures out to save the city from the machinations of a mysterious reptilian foe.</p>
                            <button class="movie-list-item-button">Watch</button><br>
                            <br>
                                <span class="ticket-cost">Ticket Cost: $1000.00</span> 
                            <br>
                            <button><a class="book-button" href="seat.php?id=1 & cost= 1000">Book Now</a></button><br>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/w3.jpeg">
                            <span class="movie-list-item-title">Wish</span>
                            <p class="movie-list-item-desc">Asha, a sharp-witted idealist, makes a wish so powerful that 
                              it is answered by a cosmic force—a little ball of boundless energy called Star. </p>
                            <button class="movie-list-item-button">Watch</button><br>
                            <br>
                                <span class="ticket-cost">Ticket Cost: $900.00</span> 
                            <br>
                            <button><a class="book-button" href="seat.php?id=1 & cost= 900">Book Now</a></button><br>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/LT2.jpeg" alt="">
                            <span class="movie-list-item-title">Little Mermaid</span>
                            <p class="movie-list-item-desc">A young mermaid makes a deal with a sea witch to trade her beautiful voice
                               for human legs so she can discover the world above water and impress a prince.</p>
                            <button class="movie-list-item-button">Watch</button><br>
                            <br>
                                <span class="ticket-cost">Ticket Cost: $1000.00</span> 
                            <br>
                               <button><a class="book-button" href="seat.php?id=1 & cost= 1000">Book Now</a></button><br>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/7.jpEg" alt="">
                            <span class="movie-list-item-title">PAW Patrol</span>
                            <p class="movie-list-item-desc">A new breed of heroes hits the big screen in this feature-length 
                              movie featuring kids animated faves the PAW Patrol. 
                              When a magical meteor crash lands in Adventure City, 
                              it gives the pups superpowers, transforming them into The MIGHTY PUPS! For Skye.
                              </p>
                            <button class="movie-list-item-button">Watch</button><br>
                            <br>
                                <span class="ticket-cost">Ticket Cost: $750.00</span> 
                            <br>
                            <button><a class="book-button" href="seat.php?id=1 & cost= 750">Book Now</a></button><br>
                        </div>
                        <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/4.jpg" alt="">
                            <span class="movie-list-item-title">Tinker Bell</span>
                            <p class="movie-list-item-desc">Tinkerbell wanders into the forbidden Winter woods and meets Periwinkle.
                                 Together they learn the secret of their wings and try to unite the warm 
                                 fairies and the winter fairies to help Pixie Hollow.</p>
                            <button class="movie-list-item-button">Watch</button><br>
                            <br>
                                <span class="ticket-cost">Ticket Cost: $1000.00</span> 
                            <br>
                            <button><a class="book-button" href="seat.php?id=1 & cost= 1000">Book Now</a></button></br>
                        </div>
                        <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/wimp.jpg" alt="">
                            <span class="movie-list-item-title">Diary of a Wimpy Kid 2</span>
                            <p class="movie-list-item-desc">Greg and Rodrick, two brothers, are always at odds with each other and rarely ever get along. 
                                However, their parents are tired of their antics and constant fights, so they try to make them bond..</p>
                                <iframe class="movie-list-item-button"  width="250" height="160" src="https://www.youtube.com/embed/16u7oeK0O90" frameborder="0" allowfullscreen>Watch</iframe><br>
                            <br>
                                <span class="ticket-cost">Ticket Cost: $900.00</span> 
                            <br>
                            <button><a class="book-button" href="seat.php?id=1 & cost= 900">Book Now</a></button><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>

  
<?php
$user = 'root';
$password = ''; 
$database = 'byardtst'; 
$port = 3306; 
$mysqli = new mysqli('localhost', $user, $password, $database, $port);




$stmt = $mysqli->prepare("SELECT title, image_url, trailer_link, description, cast
FROM movie, cinema_time
WHERE movie_ID = ?
AND cinema_time_ID = ?");

if (!$stmt) {
    die('Error in SQL query: ' . $mysqli->error);
}

$stmt->bind_param("ii", $movie_id, $cinema_time_id);
$stmt->execute();

if ($stmt->error) {
    die('Error in execute: ' . $stmt->error);
}

$stmt->bind_result($title, $image_url, $trailer_link, $description, $cast);

if ($stmt->error) {
    die('Error in bind_result: ' . $stmt->error);
}

$userlevel = 'guest';
	//Get userlevel received
	if(isset($_GET['uxl'])){
		$userlevel=$_GET['uxl'];
	}
	


$stmt->fetch();
$stmt->close();



?>
    
    <?php
$mysqli->close();
?>



</body>
</html>
<div> <div class="footer" class="center">
    <footer>
        <p>&copy; Jamrock Cinema</p>
    </footer>
 </div>