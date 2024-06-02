<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,900&display=swap"
      rel="stylesheet"
    />
    <link href="UserAboutD.css" rel = "stylesheet"/>
    
  </head>
  <body>
    <header>
      <div>
        <nav onmousemove="moveHover(event)">
            <a href="UserHomePage.php" data-id="home" onclick="toggleStyle('home')">Home</a>
            <a href="UserAbout.php" data-id="about" onclick="toggleStyle('about')">About</a>
            <a href="UserEvents.php" data-id="events" onclick="toggleStyle('events')">Events</a>
            <a href="UserShop.php" data-id="merch" onclick="toggleStyle('merch')">Merch</a>
            <a href="UserAccount.php" data-id="account" onclick="toggleStyle('account')">Account</a>
            <div class="animation" id="nav-animation"></div>
        </nav>
    </div>
        <img class="lspu"src="lspu.png">
        <img class="ccs"src="NewLogoCCS.png">
    </header>

    <main>
      <section class="home-intro">
<div id="banner">
	<div id="bannertext">
		<h1>Computer Club</h1>
		<p>College of Computer Studies</p>
	</div>
</div>
        
      </section>

      <div class="home-about">
        <div class="col fade-in">
        <h2>About us</h2>
        
        <p>We are a dynamic community of computer enthusiasts dedicated to fostering collaboration, innovation, and learning in all things related to technology.</p>
        <div class="columns">
          <div class="col fade-in">
            <h3>Constitution And By-Laws</h3>

            <div class = "bylaws">
              <a href="bylaw.html" target="_blank"> <img class = "pic"  src ="https://i.postimg.cc/526VgrsH/image-2024-04-10-123140407.png" ></a>
            </div>
            

          </div>
          <div class="col fade-in">
            <h3>Cert of Acknowledgment
              
            </h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Voluptatibus minima quo beatae eius blanditiis officiis.
            </p>
          </div>
          <div class="col fade-in">
            <h3>Goals</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum
              quasi quis doloribus quia illum laudantium.
            </p>
          </div>
        </div>
      </div>

      <div class="home-more-stuff">
        <div class="more-stuff-grid">
          <img
            src="https://i.postimg.cc/65b3S2Fj/png-20230501-132552-0000.png" alt="" class="slide-in from-left"
          />
          <p class="slide-in from-right">
            Mission <br>
            To deliver unparalleled value to our stakeholders by providing innovative solutions, exceptional service, 
            and sustainable growth opportunities. Through a commitment to excellence, integrity, 
            and collaboration, we strive to exceed expectations and drive positive change in the industries we serve.
          </p>
        </div>
        
        
        
        <div class="more-stuff-grid">
          <p class="slide-in from-left">
            Vision <br>
            As a premier organization in information technology, we envision a future where our innovative solutions redefine industry 
            standards and drive transformative change. Grounded in our core values of quality, customer satisfaction, and environmental stewardship, 
            we aspire to be the trusted partner of choice for businesses seeking technological excellence. 
            Our vision is to lead by example, inspiring industries to embrace cutting-edge IT solutions while upholding the highest standards of professionalism and ethical conduct. Through our relentless pursuit of excellence, 
            we aim to shape a future where technology serves as a catalyst for progress and prosperity.
          </p>
          <img
            src="https://unsplash.it/401"
            alt=""
            class="slide-in from-right"
          />
        </div>
          </div>
        </div>
          <div class="home-about">
        <div class="col fade-in">
        <h2>Faculty Member's</h2>
        <p>We are a dynamic community of computer enthusiasts dedicated to fostering collaboration, innovation, and learning in all things related to technology.</p>
          
          
      <div class= "faculty">

          <div class = "container">
            <div class = "card">
              <img class = "pic" src ="https://i.postimg.cc/52sm6Vdy/DEAN-TOTO.jpg" alt = "Dean">
              <div class = "intro">
                <h1 style="font-size: 19px;">Ronnel A. Dela Cruz</h1>
                <p class = "pos">Associate Dean <br><br> ronnel.delacruz@lspu.edu.ph</p>
              </div>
            </div>
            
                <div class = "card">
              <img class = "pic" src ="https://i.postimg.cc/pddqZdYK/DEAN-SECRETARY-MAM-LIBERLYN.jpg" alt = "Dean Sec.">
              <div class = "intro">
                <h1 style="font-size: 19px;">leberlyn R. Dangue</h1>
                <p class = "pos">Dean's Secretary</p>
              </div>
            </div>
            
                <div class = "card">
              <img class = "pic" src ="https://i.postimg.cc/4xf5f30j/MAM-ANNA-PRINCESS.jpg" alt = "">
              <div class = "intro">
                <h1 style="font-size: 19px;">Anna Princess L. Marita</h1>
                <p class = "pos">Gender and Development Unit Head / 
                  International and Local Affairs Coordinator, Technology Support Officer Coordinator<br><br>
                  annaprincess.marita<br>@lspu.edu.ph
                  </p>
              </div>
            </div>
            
                <div class = "card">
              <img class = "pic" src ="https://i.postimg.cc/xTy5Vm6K/MAM-CATHERINE.jpg" alt = "Dean">
              <div class = "intro">
                <h1 style="font-size: 19px;">Catherine A. Castillo</h1>
                <p class = "pos">Program Coordinator (BSCS) / Curriculum Instruction Development Coordinator<br><br> catherine.castillo@lspu.edu.ph</p>
              </div>
            </div>
            
                <div class = "card">
              <img class = "pic" src ="https://i.postimg.cc/RCJpyNrR/MAM-CRISELDA.jpg" alt = "Dean">
              <div class = "intro">
                <h1 style="font-size: 19px;">Criselda C. Encanto</h1>
                <p class = "pos">criselda.encanto@lspu.edu.ph</p>
              </div>
            </div>
            
                <div class = "card">
              <img class = "pic" src ="https://i.postimg.cc/vBc2Qm4G/MAM-JENNELYN.png" alt = "Dean">
              <div class = "intro">
                <h1 style="font-size: 19px;">Jennelyn E. Espinueva</h1>
                <p class = "pos">Extension Implementing Unit Head /
                  Program Coordinator (MSIT/MIT)<br><br>
                  jennelyn.espinueva<br>@lspu.edu.ph
                  </p>
              </div>
            </div>
            
                <div class = "card">
              <img class = "pic" src ="https://i.postimg.cc/CK6J6VmX/MAM-JOANNA.jpg" alt = "Dean">
              <div class = "intro">
                <h1 style="font-size: 19px;">Joanna E. De Torres</h1>
                <p class = "pos">joanna.detorres@lspu.edu.ph</p>
              </div>
            </div>
            
                <div class = "card">
              <img class = "pic" src ="https://i.postimg.cc/L4PvvwfQ/MAM-SARAH.jpg" alt = "Dean">
              <div class = "intro">
                <h1 style="font-size: 19px;">Sarah B. Escote</h1>
                <p class = "pos">sarah.escote@lspu.edu.ph</p>
              </div>
            </div>
            
                <div class = "card">
              <img class = "pic" src ="https://i.postimg.cc/J0jqnHMC/SIR-AL-JOHN.jpg" alt = "Dean">
              <div class = "intro">
                <h1 style="font-size: 19px;">Al John Villareal</h1>
                <p class = "pos">College Secretary /Computer Club Adviser<br><br>
                  aljohn.villareal@lspu.edu.ph
                  </p>
              </div>
            </div>
            
                <div class = "card">
              <img class = "pic" src ="https://i.postimg.cc/Wp060rLQ/SIR-JOESUA.jpg" alt = "Dean">
              <div class = "intro">
                <h1 style="font-size: 19px;">Joesua R. Manzanero</h1>
                <p class = "pos">Program Coordinator (BS INFO TECH) /
                  OJT Coordinator & Computer Club Adviser<br><br>
                  josesua.manzanero<br>@lspu.edu.ph
                  </p>
              </div>
            </div>
            
                <div class = "card">
              <img class = "pic" src ="https://i.postimg.cc/pXxQCTPy/SIR-JOHN-RYAN.jpg" alt = "Dean">
              <div class = "intro">
                <h1 style="font-size: 19px;">John Ryan S. Ual</h1>
                <p class = "pos">johnryan.ual@lspu.edu.ph</p>
              </div>
            </div>
            
                <div class = "card">
              <img class = "pic" src ="https://i.postimg.cc/VNSXv0WZ/SIR-MACKY.jpg" alt = "Dean">
              <div class = "intro">
                <h1 style="font-size: 19px;">Marco Jr. N. Del Rosario</h1>
                <p class = "pos">Research Implementing Unit Head<br><br>
                  macky.delrosario@lspu.edu.ph
                  </p>
              </div>
            </div>
            
                <div class = "card">
              <img class = "pic" src ="https://i.postimg.cc/HLfXyWSY/SIR-MARLON.jpg" alt = "Dean">
              <div class = "intro">
                <h1 style="font-size: 19px;">Marlon Boyet B. Dungo</h1>
                <p class = "pos">marlon.dungo@lspu.edu.ph</p>
              </div>
            </div>
            
                <div class = "card">
              <img class = "pic" src ="https://i.postimg.cc/hGwb11Gq/SIR-NEIRRO.png" alt = "Dean">
              <div class = "intro">
                <h1 style="font-size: 19px;">Nierro C. Ilagan</h1>
                <p class = "pos">Semicolon Club Adviser / Faculty In-Charge
                  (CCS Laboratory Rooms)<br><br>nierro.ilagan@lspu.edu.ph
                  </p>
              </div>
            </div>
            
                <div class = "card">
              <img class = "pic" src ="https://i.postimg.cc/NFxHS6QF/SIR-NORRIS.jpg" alt = "Dean">
              <div class = "intro">
                <h1 style="font-size: 19px;">Norris Alexis P. Amora</h1>
                <p class = "pos">norrisalexis.amora<br>@lspu.edu.ph</p>
              </div>
            </div>
            
                <div class = "card">
              <img class = "pic" src ="https://i.postimg.cc/d1rdmMX8/SIR-PAUL-JENSSEN.jpg" alt = "Dean">
              <div class = "intro">
                <h1 style="font-size: 19px;">Paul jensen P. Lara</h1>
                <p class = "pos">pauljensen.lara@lspu.edu.ph</p>
              </div>
            </div>
            
                <div class = "card">
              <img class = "pic" src ="https://i.postimg.cc/yxKRLQ42/SIR-PRINCE.jpg" alt = "Dean">
              <div class = "intro">
                <h1 style="font-size: 19px;">prince Ross O. Andres</h1>
                <p class = "pos">Teacher Adviser<br><br>prince.andres@lspu.edu.ph</p>
              </div>
            </div>
            
                <div class = "card">
              <img class = "pic" src ="https://i.postimg.cc/K8jMp3wc/SIR-REYMAR.jpg" alt = "Dean">
              <div class = "intro">
                <h1 style="font-size: 19px;">Reymar V. Manaloto</h1>
                <p class = "pos">Intellectual Property-Technology Business Management Coordinator<br><br>reymar.manaloto<br>@lspu.edu.ph</p>
              </div>
            </div>
            
                <div class = "card">
              <img class = "pic" src ="https://i.postimg.cc/MKWRRFYQ/SIR-WINCHELL.jpg" alt = "Dean">
              <div class = "intro">
                <h1 style="font-size: 19px;">Winchell Ceazar R. Desamero</h1>
                <p class = "pos">Alumni Coordinator/ Semicolon Club Adviser<br><br> winchell_ceazar.desamero<br>@lspu.edu.ph </p>
              </div>
            </div>    
          </div>
        </div>
      </div>
     </div>
            
        <div class="home-about">
        <div class="col fade-in">
        <div class="margin">
        <h2>Computer Club Officer's</h2>
        <p>We are a dynamic community of computer enthusiasts dedicated to fostering collaboration, innovation, and learning in all things related to technology.</p>
          </div>
          
         <div class="faculty"> 
          <div class = "margins">
            <div class = "card">
              <img class = "pic" src ="https://i.postimg.cc/TY9fdSD7/a2d2ecb1-5b85-4be0-8d41-ca972c8fc9d5.jpg" alt = "Dean">
              <div class = "intro">
                <h1 style="font-size: 19px;"> Jasmine Jusi</h1>
                <p class = "pos">President</p>
              </div>
            </div>
            
                <div class = "card">
              <img class = "pic" src ="https://i.postimg.cc/mknqkYTr/396734717-1054968945849489-1102124972126481012-n.jpg" alt = "Dean Sec.">
              <div class = "intro">
                <h1 style="font-size: 19px;"> Timothy Gavino</h1>
                <p class = "pos"> Vice President</p>
              </div>
            </div>
            
                <div class = "card">
              <img class = "pic" src ="https://i.postimg.cc/2jnCJ38f/30292873-b0bb-46a6-8485-e18a1feb6eb5.jpg" alt = "">
              <div class = "intro">
                <h1 style="font-size: 19px;"> Margarette Audije</h1>
                <p class = "pos">Secretary</p>
              </div>
            </div>
            
                <div class = "card">
              <img class = "pic" src ="https://i.postimg.cc/nzDnnh4B/230da7de-49df-4e1d-89d3-96ee64893c07.jpg" alt = "Dean">
              <div class = "intro">
                <h1 style="font-size: 19px;"> Vince Cube</h1>
                <p class = "pos">PIO</p>
              </div>
            </div>
            
                <div class = "card">
              <img class = "pic" src ="https://i.postimg.cc/rpz8YJzh/df1e5749-3a4d-40c6-b8b6-64861af73fa5.jpg" alt = "Dean">
              <div class = "intro">
                <h1 style="font-size: 19px;">Kendrix Brosas</h1>
                <p class = "pos">PIO</p>
              </div>
            </div>
            
                <div class = "card">
              <img class = "pic" src ="https://i.postimg.cc/8zZpH3kJ/1fc1c878-cfd7-4272-bfad-19142b92213a.jpg" alt = "Dean">
              <div class = "intro">
                <h1 style="font-size: 19px;">Jethro Bomiel</h1>
                <p class = "pos">Treasurer</p>
              </div>
            </div>
            
                <div class = "card">
              <img class = "pic" src ="https://i.postimg.cc/mk9GCL8R/409160111-2540219946151536-350090321085511377-n.jpg" alt = "Dean">
              <div class = "intro">
                <h1 style="font-size: 19px;">Jerico Tendero</h1>
                <p class = "pos">Auditor</p>
              </div>
            </div>
            
                <div class = "card">
              <img class = "pic" src ="https://i.postimg.cc/HsHTCHV8/3cf75dd9-978a-4a27-9032-b1a0bd5258c5.jpg" alt = "Dean">
              <div class = "intro">
                <h1 style="font-size: 19px;">Trishamay Albor</h1>
                <p class = "pos">Business Manager</p>
              </div>
            </div>
            
                <div class = "card">
              <img class = "pic" src ="https://i.postimg.cc/nrfprf25/d5c04c7e-c5b1-4cc8-899f-24ec77937323.jpg" alt = "Dean">
              <div class = "intro">
                <h1 style="font-size: 19px;">James Patacsil</h1>
                <p class = "pos">Business Manager</p>
              </div>
            </div>
            
                <div class = "card">
              <img class = "pic" src ="https://i.postimg.cc/R08MrHHv/fd121568-def2-436e-b2bb-c287558e91b5.jpg" alt = "Dean">
              <div class = "intro">
                <h1 style="font-size: 19px;">Kaye galero</h1>
                <p class = "pos">Yes</p>
              </div>
            </div>
            
            <div class = "card">
              <img class = "pic" src ="https://i.postimg.cc/Kj7FgpsY/2e2319e0-6efa-4079-beb4-5abb2e41696f.jpg" alt = "Dean">
              <div class = "intro">
                <h1 style="font-size: 19px;">Teodor Delrosario</h1>
                <p class = "pos">SSC Representative</p>
              </div>
            </div>         
          </div>
         </div>
          </div>
        </div>    
        <script>
          const header = document.querySelector("header");
const sectionOne = document.querySelector(".home-intro");
const moreStuffSection = document.querySelector('.home-more-stuff');

const faders = document.querySelectorAll(".fade-in");
const sliders = document.querySelectorAll(".slide-in");

const sectionOneOptions = {
  rootMargin: "-200px 0px 0px 0px"
};

const sectionOneObserver = new IntersectionObserver(function(
  entries,
  sectionOneObserver
) {
  entries.forEach(entry => {
    if (!entry.isIntersecting) {
      header.classList.add("nav-scrolled");
    } else {
      header.classList.remove("nav-scrolled");
    }
  });
},
sectionOneOptions);

sectionOneObserver.observe(sectionOne);

const appearOptions = {
  threshold: 0,
  rootMargin: "0px 0px -50px 0px"
};

const appearOnScroll = new IntersectionObserver(function(
  entries,
  appearOnScroll
) {
  entries.forEach(entry => {
    if (!entry.isIntersecting) {
      return;
    } else {
      entry.target.classList.add("appear");
      appearOnScroll.unobserve(entry.target);
    }
  });
},
appearOptions);

faders.forEach(fader => {
  appearOnScroll.observe(fader);
});

sliders.forEach(slider => {
  appearOnScroll.observe(slider);
});

const moreStuffOptions = {
  threshold: 0,
  rootMargin: "0px"
};

const moreStuffObserver = new IntersectionObserver(function(entries, moreStuffObserver) {
  entries.forEach(entry => {
    if (!entry.isIntersecting) {
      return;
    } else {
      entry.target.querySelectorAll('.slide-in').forEach(element => {
        element.classList.add('appear');
      });
    }
    moreStuffObserver.unobserve(entry.target); // Moved outside the forEach loop
  });
}, moreStuffOptions);

document.querySelectorAll('.more-stuff-grid').forEach(grid => {
  moreStuffObserver.observe(grid);
});
function toggleStyle(targetId) {
                const animation = document.getElementById('nav-animation');
                const targetElement = document.querySelector(`[data-id="${targetId}"]`);

                const leftOffset = targetElement.offsetLeft;
                const width = targetElement.offsetWidth;

                animation.style.left = leftOffset + 'px';
                animation.style.width = width + 'px';
                animation.style.display = 'block'; 
            }

            function moveHover(event) {
                const animation = document.getElementById('nav-animation');
                const navLinks = document.querySelectorAll('nav a');

                let mouseX = event.pageX - event.currentTarget.offsetLeft;

                let closestElement = null;
                let minDistance = Infinity;

                navLinks.forEach(link => {
                    const linkX = link.offsetLeft;
                    const linkWidth = link.offsetWidth;
                    const distance = Math.abs(mouseX - (linkX + linkWidth / 2));

                    if (distance < minDistance) {
                        minDistance = distance;
                        closestElement = link;
                    }
                });

                const leftOffset = closestElement.offsetLeft;
                const width = closestElement.offsetWidth;

                animation.style.left = leftOffset + 'px';
                animation.style.width = width + 'px';
            }
        </script>

  
    </main>
  </body>
</html>