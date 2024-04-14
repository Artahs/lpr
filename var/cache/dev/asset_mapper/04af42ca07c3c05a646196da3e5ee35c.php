O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:64:"C:\wamp64\www\projet\BUT2_S4\INFO4_PHP\lpr\assets\styles\app.css";s:10:"publicPath";s:55:"/assets/styles/app-d638f9c5cae5189c55b0009f66c8016e.css";s:23:"publicPathWithoutDigest";s:22:"/assets/styles/app.css";s:15:"publicExtension";s:3:"css";s:7:"content";s:14001:"* {
  margin: 0;
  padding: 0;
}

html,
body {
  width: 100%;
  height: 100%;
}

input {
  color: black;
}

textarea {
  color: black;
}

select {
  color: black;
}

h1,
h2,
h3,
h4,
p,
span {
  color: white;
}

a {
  text-decoration: none;
  color: #0b6aff;
}


body {
  background-image: url("../images/fond_etoile-a7923ade574244c5097b66bdacd8d685.webp");
  background-attachment: fixed;
}

header {
  position: fixed;
  z-index: 1000;
}

.logo {
  width: 55px;
  height: 55px;
  background-image: url("../images/LogoV1-acf7a6cb807b48a29e91526b254284d7.webp");
  background-position: center;
  background-size: contain;
  background-repeat: no-repeat;
  border-radius: 50%;
}

.log-form {
  margin-top: 10%;
  padding-left: 20%;
  padding-right: 20%;
}

.log-input {
  width: 50%;
}


.card-product {
  padding: 0;
  position: relative;
  width: 190px;
  height: 254px;
  background-color: #2d2d2d;
  border-radius: 20px;
  overflow: hidden;
}

.top-card-product {
  border-top-left-radius: 20px;
  border-top-right-radius: 20px;
  height: 65%;
  transition: height 0.3s ease;
  background-color: #2d2d2d;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}

.bottom-card-product {
  border-top-right-radius: 20px;
  border-bottom-left-radius: 20px;
  border-bottom-right-radius: 20px;
  height: 35%;
  transition: height 0.3s ease;
  background-color: #0b6aff;
}

.bottom-card-product::before {
  content: "";
  position: absolute;

  background-color: #2d2d2d00;
  bottom: 89px;
  height: 50px;
  width: 175px;
  transition: bottom 0.3s ease;
  border-bottom-left-radius: 20px;
  box-shadow: 0 30px 0 0 #0b6aff;
}

.card-content-product {
  padding-top: 13%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.card-title-product {
  font-weight: 700;
  font-size: 18px;

}

.card-txt-product {
  font-size: 14px;
  font-weight: 600;

}

.card-btn-product {
  font-size: 13px;
  margin-top: 15%;
  text-decoration: none;
  color: white;
  background-color: #2d2d2de7;
  border-radius: 18px;
  padding: 5%;
}

.card-product:hover .top-card-product {
  height: 35%;
  transition: height 0.3s ease;
}

.card-product:hover .bottom-card-product {
  height: 65%;
  transition: height 0.3s ease;
}

.card-product:hover .bottom-card-product::before {
  bottom: 164px;
  transition: bottom 0.3s ease;
}

.card-btn-product:hover {
  background-color: #2d2d2d;
}


.list-card {
  display: flex;
  flex-direction: row;
  margin: 2%;
  border-radius: 20px;
  background-color: #0b6aff;
}

.list-card-img {
  width: 150px;
  height: 150px;
  border-radius: 20px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  background-color: #2d2d2d;
}

.list-card-txt {
  width: 80%;
  margin-left: 2%;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.list-card-titre{
  font-size: 20px;
}

.list-card-prix{
  font-size: 20px;
  font-weight: 700;
}

.list-card-btn {
  border-radius: 25px;
  background-color: #2d2d2d;
  color: white;
  text-decoration: none;
  padding: 1%;
}


#container {
  overflow: hidden;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}

#background_video {
  position: absolute;

  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);

  object-fit: cover;
  height: 100%;
  width: 100%;
}


/* Btn ajout*/

.Btn-add {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  width: 45px;
  height: 45px;
  border-radius: calc(45px/2);
  border: none;
  cursor: pointer;
  position: relative;
  overflow: hidden;
  transition-duration: .3s;
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.199);
  background-color: #0b6aff;
}

/* plus sign */
.sign {
  width: 100%;
  font-size: 2.2em;
  color: white;
  transition-duration: .3s;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* text */
.text {
  position: absolute;
  right: 0%;
  width: 0%;
  opacity: 0;
  color: white;
  font-size: 1.4em;
  font-weight: 500;
  transition-duration: .3s;
}

/* hover effect on button width */
.Btn-add:hover {
  width: 125px;
  transition-duration: .3s;
}

.Btn-add:hover .sign {
  width: 30%;
  transition-duration: .3s;
  padding-left: 15px;
}

/* hover effect button's text */
.Btn-add:hover .text {
  opacity: 1;
  width: 70%;
  transition-duration: .3s;
  padding-right: 15px;
}

/* button click effect*/
.Btn-add:active {
  transform: translate(2px, 2px);
}

.block-filtre {
  background-color: #0b6aff;
  width: 70%;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  border-top-right-radius: 20px;
  border-bottom-right-radius: 20px;
  margin-bottom: 2%;
  height: 175px;
}

.block-filtre-droite{
  margin-right: 1%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.filtre{
  display: flex;
  justify-content: space-between;
}

.filtre > a {
  color: white;
  text-decoration:underline;
}


.produit-section {
  padding-top: 5%;
  height: 100vh;
}

.img-container {
  height: 50%;
}

.produit-edit {
  background-color: #0b6aff;
  border-radius: 50%;
  height: 50px;
  width: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.button-retour {
  display: block;
  position: relative;
  width: 56px;
  height: 56px;
  margin: 0;
  overflow: hidden;
  outline: none;
  background-color: transparent;
  cursor: pointer;
  border: 0;
}

.button-retour:before,
.button-retour:after {
  content: "";
  position: absolute;
  border-radius: 50%;
  inset: 7px;
}

.button-retour:before {
  border: 4px solid #f0eeef;
  transition: opacity 0.4s cubic-bezier(0.77, 0, 0.175, 1) 80ms,
    transform 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) 80ms;
}

.button-retour:after {
  border: 4px solid #0b6aff;
  transform: scale(1.3);
  transition: opacity 0.4s cubic-bezier(0.165, 0.84, 0.44, 1),
    transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  opacity: 0;
}

.button-retour:hover:before,
.button-retour:focus:before {
  opacity: 0;
  transform: scale(0.7);
  transition: opacity 0.4s cubic-bezier(0.165, 0.84, 0.44, 1),
    transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.button-retour:hover:after,
.button-retour:focus:after {
  opacity: 1;
  transform: scale(1);
  transition: opacity 0.4s cubic-bezier(0.77, 0, 0.175, 1) 80ms,
    transform 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) 80ms;
}

.button-retour-box {
  display: flex;
  position: absolute;
  top: 0;
  left: 0;
}

.button-retour-elem {
  display: block;
  width: 20px;
  height: 20px;
  margin: 17px 18px 0 18px;
  transform: rotate(180deg);
  fill: #f0eeef;
}

.button-retour-elem>svg {
  vertical-align: baseline;
}

.button-retour:hover .button-retour-box,
.button-retour:focus .button-retour-box {
  transition: 0.4s;
  transform: translateX(-56px);
}


.button-del {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background-color: #0b6aff;
  border: none;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.164);
  cursor: pointer;
  transition-duration: .3s;
  overflow: hidden;
  position: relative;
}

.svgIcon-del {
  width: 12px;
  transition-duration: .3s;
}

.svgIcon-del path {
  fill: white;
}

.button-del:hover {
  width: 140px;
  border-radius: 50px;
  transition-duration: .3s;
  background-color: rgb(255, 69, 69);
  align-items: center;
}

.button-del:hover .svgIcon-del {
  width: 50px;
  transition-duration: .3s;
  transform: translateY(60%);
}

.button-del::before {
  position: absolute;
  top: -20px;
  content: "Delete";
  color: white;
  transition-duration: .3s;
  font-size: 2px;
}

.button-del:hover::before {
  font-size: 13px;
  opacity: 1;
  transform: translateY(30px);
  transition-duration: .3s;
}

.produit-prix {
  background-color: #0b6aff;
  border-radius: 8px;
  padding-right: 2%;
  padding-left: 2%;
  padding-top: 1%;
  padding-bottom: 1%;
  font-size: 24px;
  font-weight: 700;
}

.button-achat {
  background-color: transparent;
  color: white;
  padding: 1%;
  border-radius: 8px;
  border-style: solid;
  border-color: #0b6aff;
  display: flex;
  justify-content: center;
  align-items: center;
  font-weight: 500;
}

.button-achat:hover {
  background-color: #0b6aff;
  transition: background-color 0.2s ease;
}

.panier-card {}

.panier-img {
  width: 100px;
  height: 100px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: contain;
}

.btn-deco {
  background-color: transparent;
  color: white;
  padding: 10%;
  border-radius: 8px;
  border-style: solid;
  border-color: #fd1f1f;
}

.btn-deco:hover {
  background-color: #fd1f1f;
  transition: background-color 0.2s ease;
}

.btn-compte {
  background-color: transparent;
  color: white;
  padding: 1%;
  border-radius: 8px;
  border-style: solid;
  border-color: #0b6aff;
  display: flex;
  justify-content: center;
  align-items: center;
}

.btn-compte:hover {
  background-color: #0b6aff;
  transition: background-color 0.2s ease;
}


footer {
  background-color: #0020545a;
}

ul {
  list-style: none;
}

.footer-nav>li>a {
  color: white;
  text-decoration: underline;
}

.example-2 {
  display: flex;
  justify-content: center;
  align-items: center;
}

.example-2 .icon-content {
  margin: 0 10px;
  position: relative;
}

.example-2 .icon-content .tooltip {
  position: absolute;
  top: -30px;
  left: 50%;
  transform: translateX(-50%);
  color: #fff;
  padding: 6px 10px;
  border-radius: 5px;
  opacity: 0;
  visibility: hidden;
  font-size: 14px;
  transition: all 0.3s ease;
}

.example-2 .icon-content:hover .tooltip {
  opacity: 1;
  visibility: visible;
  top: -50px;
}

.example-2 .icon-content a {
  position: relative;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 45px;
  height: 45px;
  border-radius: 50%;
  color: #4d4d4d;
  background-color: #fff;
  transition: all 0.3s ease-in-out;
}

.example-2 .icon-content a:hover {
  box-shadow: 3px 2px 45px 0px rgb(0 0 0 / 12%);
}

.example-2 .icon-content a svg {
  position: relative;
  z-index: 1;
  width: 30px;
  height: 30px;
}

.example-2 .icon-content a:hover {
  color: white;
  fill: white;
}

.example-2 .icon-content a .filled {
  position: absolute;
  top: auto;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 0;
  background-color: #000;
  transition: all 0.3s ease-in-out;
}

.example-2 .icon-content a:hover .filled {
  height: 100%;
}

.example-2 .icon-content a[data-social="discord"] .filled,
.example-2 .icon-content a[data-social="discord"]~.tooltip {
  background-color: #7289da;
}

.example-2 .icon-content a[data-social="steam"] .filled,
.example-2 .icon-content a[data-social="steam"]~.tooltip {
  background-color: #171d25;
}

.example-2 .icon-content a[data-social="instagram"] .filled,
.example-2 .icon-content a[data-social="instagram"]~.tooltip {
  background: linear-gradient(45deg,
      #405de6,
      #5b51db,
      #b33ab4,
      #c135b4,
      #e1306c,
      #fd1f1f);
}

.example-2 .icon-content a[data-social="youtube"] .filled,
.example-2 .icon-content a[data-social="youtube"]~.tooltip {
  background-color: #ff0000;
}

















.fish {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}

.bowl {
  height: 200px;
  width: 200px;
  border-radius: 50%;
  border: 2px solid white;
  position: relative;
  animation: move 8s infinite;
}

@keyframes move {
  0% {
    transform: rotate(0);
  }

  33% {
    transform: rotate(-20deg);
  }

  67% {
    transform: rotate(20deg);
  }

  100% {
    transform: rotate(0);
  }
}

.bowl:after {
  content: "";
  position: absolute;
  width: 100px;
  height: 26px;
  border-radius: 50%;
  background: black;
  border: 2px solid white;
  left: 50%;
  top: -4px;
  transform: translatex(-50%);
  z-index: 100;
}

.water {
  height: 190px;
  width: 190px;
  background: linear-gradient(to bottom, black 0% 50%, #2389da 50% 100%);
  border-radius: 50%;
  position: absolute;
  top: 7px;
  left: 7px;
  animation: move1 8s infinite;
  z-index: -100;
}

@keyframes move1 {
  0% {
    transform: rotate(0);
  }

  33% {
    transform: rotate(20deg);
  }

  67% {
    transform: rotate(-20deg);
  }

  100% {
    transform: rotate(0);
  }
}

.water:after {
  content: "";
  position: absolute;
  width: 100%;
  height: 30px;
  background: #0f5e9c;
  border-radius: 50%;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.body {
  width: 70px;
  height: 36px;
  background: orange;
  ;
  border-radius: 40% 50% 50% 40%;
  bottom: 30px;
  right: 60px;
  position: absolute;
}

.fin {
  width: 40px;
  height: 24px;
  position: absolute;
  background: #EF8A1F;
  border-radius: 50%;
}

.fin.top {
  z-index: -100;
  transform: rotate(-20deg);
  left: 14px;
  bottom: 24px;
  border-radius: 50% 50% 0% 0%;
}

.fin.bottom {
  z-index: -100;
  transform: rotate(20deg);
  left: 14px;
  bottom: -12px;
  border-radius: 50% 0% 50% 50%;
}

.fin-center {
  height: 10px;
  width: 12px;
  background: #EF8A1F;
  border-radius: 50% 0 0 50%;
  position: absolute;
  left: 30px;
  top: 12px;
}

.eye {
  height: 16px;
  width: 16px;
  background: white;
  border-radius: 50%;
  position: absolute;
  left: 2px;
  top: 10px;
}

.eye:before {
  content: "";
  background: black;
  height: 8px;
  width: 8px;
  border-radius: 50%;
  position: absolute;
  left: 2px;
  top: 4px;
}

.eye:after {
  content: "";
  background: white;
  height: 4px;
  width: 4px;
  border-radius: 50%;
  position: absolute;
  left: 4px;
  top: 5px;
}

.tail {
  width: 32px;
  height: 72px;
  position: absolute;
  right: -20px;
  bottom: -42px;
  z-index: -200;
}

.tail::before {
  content: '';
  position: absolute;
  width: 32px;
  height: 20px;
  border-radius: 50%;
  background: #EF8A1F;
  transform: rotate(-30deg);
  top: -10px;
}

.tail::after {
  content: '';
  position: absolute;
  width: 32px;
  height: 20px;
  border-radius: 50%;
  background: #EF8A1F;
  transform: rotate(30deg);
  top: 10px;
}";s:6:"digest";s:32:"d638f9c5cae5189c55b0009f66c8016e";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:2:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:73:"C:\wamp64\www\projet\BUT2_S4\INFO4_PHP\lpr\assets\images\fond_etoile.webp";s:10:"publicPath";s:64:"/assets/images/fond_etoile-a7923ade574244c5097b66bdacd8d685.webp";s:23:"publicPathWithoutDigest";s:31:"/assets/images/fond_etoile.webp";s:15:"publicExtension";s:4:"webp";s:7:"content";N;s:6:"digest";s:32:"a7923ade574244c5097b66bdacd8d685";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:23:"images/fond_etoile.webp";}i:1;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:68:"C:\wamp64\www\projet\BUT2_S4\INFO4_PHP\lpr\assets\images\LogoV1.webp";s:10:"publicPath";s:59:"/assets/images/LogoV1-acf7a6cb807b48a29e91526b254284d7.webp";s:23:"publicPathWithoutDigest";s:26:"/assets/images/LogoV1.webp";s:15:"publicExtension";s:4:"webp";s:7:"content";N;s:6:"digest";s:32:"acf7a6cb807b48a29e91526b254284d7";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:18:"images/LogoV1.webp";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:14:"styles/app.css";}