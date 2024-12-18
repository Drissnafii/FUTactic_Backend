<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Simple Interface</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Try includding taildwing.css  -->
<script src="https://cdn.tailwindcss.com"></script>
<script>
    module.exports = {
  theme: {
    extend: {
      fontFamily: {
        'poppins': ['Poppins', 'sans-serif'],
      },
    },
  },
  variants: {},
  plugins: [],
}
</script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>
<body>
<h1 class="text-3xl font-bold underline flex items-center justify-center h-screen bg-gray-200 p-4">
    Hello Taindwind !
  </h1>


  <header id="headerX">
    <nav>
      <div class="logo-container">
        <img src="assets/css/logo.png" alt="logo" style="border-radius: 25px;" id="logoD">
      </div>
      <div id="navLinksAndWeAre-Container">
        
      
          <ul class="nav-links" id="navLinks">
            <li><a href="#players">Players</a>
              <ul class="dropdown-content">
                <li><a href="#squad-builder">New players</a></li>
                <li><a href="#community-squads">History</a></li>
                <li><a href="#tactics">Tactics</a></li>
              </ul></li>
            <li>
              <a href="#squad-builder">Squad Builder</a>
            </li>
            <li>
              <a href="#sbc">SBCs</a>
            </li>
            <li>
              <a href="#squads">Squads</a>
            </li>
            <li>
              <a href="#market">Admin's</a>
              <ul class="dropdown-content">
                <li><a href="#promo-squads">Jaki</a></li>
                <li><a href="#fc-pro">Lonin</a></li>
                <li><a href="list_page.php">Driss</a></li>
              </ul>
            </li>

          </ul>
          <div id="addPlayerButton-Container">
            <button id="addPlayerButton-button" onclick="toPlayerForm()"><a href="#main-content">+I'm Admin</a></button>
          </div>

          <!-- We are part  -->
           <div id="weAre-Container">
            <div id="infoL">
              <h1 style="font-size: xx-large;">Futactic Team</h1>

              <p id="parajs" style="padding: 1rem; margin-top: 1rem ; font-size: x-large; ">
                A web application for building and 
                managing your Ultimate Team 
                formations with chemistry calculations 
                and tactical positioning.
              </p>

            </div>
           </div>
      </div>
    </nav>
  </header>

  <!-- the form of adding a new player  -->
  <div id="main-content"> 

    <!-- <div class="player-controls-grid"> -->
      <div class="player-form-container">
        <form id="player-form">
          <div class="form-section">
              <div class="form-group">
                  <label >Nom du Joueur</label>
                  <input type="text" id="get-FormName" name="player-name" required>
              </div>
              <div class="form-group">
                <label id="player-position">Position</label>
                <select id="get-FormPosition" required>
                  <option value="LW">Ailier Gauche (LW)</option>
                  <option value="ST">Attaquant (ST)</option>
                  <option value="RW">Ailier Droit (RW)</option>          
                  <option value="LM">Milieu Gauche (LM)</option>
                  <option value="CM1">Milieu Central Gauche (CM)</option>
                  <option value="CM2">Milieu Central Droit (CM)</option>
                  <option value="RM">Milieu Droit (RM)</option>
                  <option value="CB1">Defenseur Central Gauche (CB)</option>
                  <option value="CB2">Defenseur Central (CB)</option>
                  <option value="CB3">Defenseur Central Droit (CB)</option>
                  <option value="GK">Gardien (GK)</option>
                  </select>
              </div>
              <div class="form-group">
                  <label >Note (1-99)</label>
                  <input type="range" id="get-note" name="player-rating" min="0" max="100" required>
              </div>
              <div class="form-group">
                  <label >Club</label>
                  <input type="text" id="get-club" name="player-club">
              </div>
              <div class="form-group">
                  <label  >Ligue</label>
                  <input type="text" id="get-ligue" name="player-league">
              </div>
              <div class="form-group">
                  <label >Nationalité</label>
                  <input type="text" id="get-nationalite" name="player-nation">
              </div>
              <div class="form-group">
                  <label >Photo (URL)</label>
                  <input type="url" id="get-photo" name="player-photo">
              </div>
              <div class="form-group">
                  <label >Drapeau (URL)</label>
                  <input type="url" id="get-drapeau" name="player-flag" required>
              </div>
              
            </div>
            <div id="addIt">
              <button type="button" onclick="GeneralShowing()"  >Add / edit</button>
            </div>
        </form>
      </div>
      
      <div class="bgTiran">
        
        <!-- Rahimi Dyaz Akhoumach >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>< -->
        <div class="playerCardsFlex">
          <div id="lewel">

            <div id="cardlid1" class="flexed__card-Class">
              <button class="playerCardes--button" id="LW" >
                <div class="buttonCard-image">
                  
                  <img src="https://img.a.transfermarkt.technology/portrait/header/3366-1683638749.jpg?lm=1" class="image505" id="buttonCard-image-LW">
                  <h2  class="note505" id="buttonCard-note-LW">13</h2>
                  <h3 class="position505" id="buttonCard-Position-LW">LW</h3>
                  <div class="name505" id="buttonCard-Name-LW" >Name</div>
                </div>
                <div class="infos303">
                  
                  <div class="club505" id="buttonCard-Club-LW">Club</div>
                  <div class="ligue505" id="buttonCard-ligue-LW">ligue</div>
                  <div class="drapeau505" id="buttonCard-drapeau-LW">Dra</div>
                </div>
              </button>
            </div>

            <div id="cardlid2" class="flexed__card-Class">
              <button class="playerCardes--button" id="ST">
                <div class="buttonCard-image">
                  <div class="buttonCard-image">
                  
                    <img src="https://img.a.transfermarkt.technology/portrait/header/3366-1683638749.jpg?lm=1" class="image505" id="buttonCard-image-ST">
                    <h2  class="note505" id="buttonCard-note-ST">13</h2>
                    <h3 class="position505" id="buttonCard-Position-ST">ST</h3>
                    <div class="name505" id="buttonCard-Name-ST" >Name</div>
                  </div>
                <div class="infos303">
                  
                  <div class="club505" id="buttonCard-Club-ST">Club</div>
                  <div class="ligue505" id="buttonCard-ligue-ST">ligue</div>
                  <div class="drapeau505" id="buttonCard-drapeau-ST">Dra</div>
                </div>
              </button>
            </div>
            <div id="cardlid3" class="flexed__card-Class">
              <button class="playerCardes--button" id="LM">
                <div class="buttonCard-image">
                  
                  <img src="https://img.a.transfermarkt.technology/portrait/header/3366-1683638749.jpg?lm=1" class="image505" id="buttonCard-image-RW">
                  <h2  class="note505" id="buttonCard-note-RW">13</h2>
                  <h3 class="position505" id="buttonCard-Position-RW">RW</h3>
                  <div class="name505" id="buttonCard-Name-RW" >Name</div>
                </div>

                <div class="infos303">
                  
                  <div class="club505" id="buttonCard-Club-RW">Club</div>
                  <div class="ligue505" id="buttonCard-ligue-RW">ligue</div>
                  <div class="drapeau505" id="buttonCard-drapeau-RW">Dra</div>
                </div>
              </button>
            </div>
          </div>

          <!-- 4 4 4 4  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>< -->

          <div id="lwesst">

            <div id="cardlid4" class="flexed__card-Class">
              <button class="playerCardes--button" id="CM">
                <div class="buttonCard-image">
                  
                  <img src="https://img.a.transfermarkt.technology/portrait/header/3366-1683638749.jpg?lm=1" class="image505" id="buttonCard-image-LM">
                  <h2  class="note505" id="buttonCard-note-LM">13</h2>
                  <h3 class="position505" id="buttonCard-Position-LM">LM</h3>
                  <div class="name505" id="buttonCard-Name-LM" >Name</div>
                </div>

                <div class="infos303">
                  
                  <div class="club505" id="buttonCard-Club-LM">Club</div>
                  <div class="ligue505" id="buttonCard-ligue-LM">ligue</div>
                  <div class="drapeau505" id="buttonCard-drapeau-LM">Dra</div>
                </div>
              </button>
            </div>
            <div id="cardlid5" class="flexed__card-Class">
              <button class="playerCardes--button" id="CDM">
                <div class="buttonCard-image">
                  
                  <img src="https://img.a.transfermarkt.technology/portrait/header/3366-1683638749.jpg?lm=1" class="image505" id="buttonCard-image-CM1">
                  <h2  class="note505" id="buttonCard-note-CM1">13</h2>
                  <h3 class="position505" id="buttonCard-Position-CM1">CM1</h3>
                  <div class="name505" id="buttonCard-Name-CM1" >Name</div>
                </div>
                <div class="infos303">
                  
                  <div class="club505" id="buttonCard-Club-CM1">Club</div>
                  <div class="ligue505" id="buttonCard-ligue-CM1">ligue</div>
                  <div class="drapeau505" id="buttonCard-drapeau-CM1">Dra</div>
                </div>
              </button>
            </div>
            <div id="cardlid6" class="flexed__card-Class">
              <button class="playerCardes--button selected" id="CM">
                <div class="buttonCard-image">
                  
                  <img src="https://img.a.transfermarkt.technology/portrait/header/3366-1683638749.jpg?lm=1" class="image505" id="buttonCard-image-CM2">
                  <h2  class="note505" id="buttonCard-note-CM2">13</h2>
                  <h3 class="position505" id="buttonCard-Position-CM2">CM2</h3>
                  <div class="name505" id="buttonCard-Name-CM2" >Name</div>
                </div>
                <div class="infos303">
                  
                  <div class="club505" id="buttonCard-Club-CM2">Club</div>
                  <div class="ligue505" id="buttonCard-ligue-CM2">ligue</div>
                  <div class="drapeau505" id="buttonCard-drapeau-CM2">Dra</div>
                </div>
              </button>
            </div>

            <div id="cardlid7" class="flexed__card-Class">
              <button class="playerCardes--button" id="RM" >
                <div class="buttonCard-image">
                  
                  <img src="https://img.a.transfermarkt.technology/portrait/header/3366-1683638749.jpg?lm=1" class="image505" id="buttonCard-image-RM">
                  <h2  class="note505" id="buttonCard-note-RM">13</h2>
                  <h3 class="position505" id="buttonCard-Position-RM">RM</h3>
                  <div class="name505" id="buttonCard-Name-RM" >Name</div>
                </div>

                <div class="infos303">
                  
                  <div class="club505" id="buttonCard-Club-RM">Club</div>
                  <div class="ligue505" id="buttonCard-ligue-RM">ligue</div>
                  <div class="drapeau505" id="buttonCard-drapeau-RM">Dra</div>
                </div>
              </button>
            </div>
            
          </div>

          <!-- difa33333333333333333333333333333  -->

          <div id="difa3">
            <div id="cardlid8" class="flexed__card-Class">
              <button class="playerCardes--button" id="LB">
                <div class="buttonCard-image">
                  
                  <img src="https://img.a.transfermarkt.technology/portrait/header/3366-1683638749.jpg?lm=1" class="image505" id="buttonCard-image-CB1">
                  <h2  class="note505" id="buttonCard-note-CB1">13</h2>
                  <h3 class="position505" id="buttonCard-Position-CB1">CB1</h3>
                  <div class="name505" id="buttonCard-Name-CB1" >Name</div>
                </div>

                <div class="infos303">
                  
                  <div class="club505" id="buttonCard-Club-CB1">Club</div>
                  <div class="ligue505" id="buttonCard-ligue-CB1">ligue</div>
                  <div class="drapeau505" id="buttonCard-drapeau-CB1">Dra</div>
                </div>
              </button>
            </div>
            <div id="cardlid9" class="flexed__card-Class">
              <button class="playerCardes--button" id="CB">
                <div class="buttonCard-image">
                  
                  <img src="https://img.a.transfermarkt.technology/portrait/header/3366-1683638749.jpg?lm=1" class="image505" id="buttonCard-image-CB2">
                  <h2  class="note505" id="buttonCard-note-CB2">13</h2>
                  <h3 class="position505" id="buttonCard-Position-CB2">CB2</h3>
                  <div class="name505" id="buttonCard-Name-CB2" >Name</div>
                </div>
                <div class="infos303">
                  
                  <div class="club505" id="buttonCard-Club-CB2">Club</div>
                  <div class="ligue505" id="buttonCard-ligue-CB2">ligue</div>
                  <div class="drapeau505" id="buttonCard-drapeau-CB2">Dra</div>
                </div>
              </button>
            </div>
            <div id="cardlid10" class="flexed__card-Class" >
              <button class="playerCardes--button" id="RB">
                <div class="buttonCard-image">
                  
                  <img src="https://img.a.transfermarkt.technology/portrait/header/3366-1683638749.jpg?lm=1" class="image505" id="buttonCard-image-CB3">
                  <h2  class="note505" id="buttonCard-note-CB3">13</h2>
                  <h3 class="position505" id="buttonCard-Position-CB3">CB3</h3>
                  <div class="name505" id="buttonCard-Name-CB3" >Name</div>
                </div>

                <div class="infos303">
                  
                  <div class="club505" id="buttonCard-Club-CB3">Club</div>
                  <div class="ligue505" id="buttonCard-ligue-CB3">ligue</div>
                  <div class="drapeau505" id="buttonCard-drapeau-CB3">Dra</div>
                </div>
              </button>
            </div>
          </div>

          <!-- l7ariiss  -->

          <div id="l7ariss">
            
            <div id="cardlid11" class="flexed__card-Class" >
              <button class="playerCardes--button" id="GK">
                <div class="buttonCard-image">
                  
                  <img src="https://img.a.transfermarkt.technology/portrait/header/3366-1683638749.jpg?lm=1" class="image505" id="buttonCard-image-GK">
                  <h2  class="note505" id="buttonCard-note-GK">13</h2>
                  <h3 class="position505" id="buttonCard-Position-GK">GK</h3>
                  <div class="name505" id="buttonCard-Name-GK" >Name</div>
                </div>

                <div class="infos303">
                  
                  <div class="club505" id="buttonCard-Club-GK">Club</div>
                  <div class="ligue505" id="buttonCard-ligue-GK">ligue</div>
                  <div class="drapeau505" id="buttonCard-drapeau-GK">Dra</div>
                </div>
              </button>
            </div>

          </div>

        </div>

      </div>
    </div>
  </div>

  <!-- End of body  -->
</body>
</html>
<script src="assets/js/app.js"></script>