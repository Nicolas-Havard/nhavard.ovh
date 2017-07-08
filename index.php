<!-- Page d'accueil du site personnel de Nicolas Havard -->
<!--                Langue française                    -->
<!--     Dernière mise à jour : le 19/04/2017           -->


<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />		
        <link rel="stylesheet" href="index.css" />
        <title>nhavard | Bienvenue</title>										
    </head>


    <body>
        <?php
            include 'struct/header.php';
        ?>
        
        <div id="conteneur">
        
            <?php
                include 'struct/nav.php';
            ?>
        

        <section>											
            <aside>												
                <H1>Havard Nicolas</H1>											
                <img src="images/photo_CV.jpg" alt="Ma photo !" title="Je ressemble à ça">	


                <H2>Ma Formation</H2>
                <p>
                    <ul>
                        <li>
                        <strong>2016-2019 : Diplôme d'ingénieur IMA (Informatique, Microélectronique et Automatique)</strong> 
                        <BR /><A HREF="http://www.polytech-lille.fr/ecole-d-ingenieurs.html#.WLFXnYWcGCo">Polytech</A>, Lille (59)
                        </li>           
                        <li>
                        <strong>2014-2016 : Classes préparatoires CPGE MPSI/MP</strong> 
                        <BR /><A HREF="http://dailly.lyc.ac-amiens.fr/site/">Lycée Pierre d'Ailly</A>, Compiègne (60)
                        </li>
                        <li>
                        <strong>2011-2014 : Diplôme du baccalauréat scientifique, mention Très Bien</strong> 
                        <BR /><A HREF="http://nerval.lyc.ac-amiens.fr/">Lycée Gérard de Nerval</A>, Soissons (02)
                        </li>
                    </ul>
                </p>
                <H2>Mes Compétences</H2>
                <p>
                    <ul>
                        <li>
                        Langues :
                        <ul>
                                <li>
                                <strong>Français</strong> (langue maternelle)
                                </li>
                                <li>
                                <strong>Anglais</strong> (B2)
                                </li>
                                <li>
                                <strong>Espagnol</strong> (B2)
                                </li>
                        </ul>
                        </li>
                        <li>
                        Informatique :
                        <ul>
                                <li>
                                <strong>Python 3</strong> (intermédiaire)
                                </li>
                                <li>
                                <strong>C</strong> (intermédiaire)
                                </li>
                                <li>
                                <strong>HTML5</strong> (intermédiaire) 
                                </li>
                                <li>
                                <strong>CSS3</strong> (notions)
                                </li>
                                <li>
                                <strong>Java</strong> (notions)
                                </li>
                                <li>
                                <strong>Arduino</strong> (notions)
                                </li>
                        </ul>
                        </li>
                    </ul>
                </u>
            </p>



            </aside>
            <article>                						
                <h1>Bienvenue !</h1>
       
                <p>
                    Bonjour et bienvenue sur mon site. Je m'appelle Nicolas Havard, mais d'autres me connaissent aussi sous le pseudonyme Shuli. 
                    <BR />
                </p>
                <p>
                    Je suis actuellement étudiant en première année du cycle ingénieur à <A HREF="http://www.polytech-lille.fr/" >Polytech'Lille</A>, dans la filière 
                    <A HREF="http://www.polytech-lille.fr/informatique-microelectronique-automatique-p118.html" >IMA</A> (Informatique, Microélétronique et Automatique).
                    Durant mon temps libre, j'aime appronfondir mes connaissances sur l'informatique, l'électronique et la domotique. C'est dans ce but que j'ai créé ce site : 
                    me permettre de comprendre comment fonctionne un site, mais aussi mettre au point des applications web.
                    Ainsi, j'héberge ce site et crée son contenu moi-même.
                    <BR />
                    Vous pouvez de plus consulter <A HREF="monparcours.php">mon CV</A> si vous le souhaitez.
                </p>

                <p>
                    Pour me contacter, vous pouvez m'envoyer un e-mail à <A HREF="mailto:nicolashavard.02@hotmail.fr" >mon adresse mail</A> ou bien consulter les différents sites suivants :
                    <BR />
                    <ul>
                        <li><A HREF="https://www.facebook.com/nicolas.shuli.havard" ><img src="images/fb.png" onmouseover="this.src='images/fb_color.png';" onmousein="this.src='images/fb_color.png';" onmouseout="this.src='images/fb.png';" width="50" height="50" /> Facebook</A></li>
                        <li><A HREF="https://twitter.com/NicolasHavard" ><img src="images/twitter.png" onmouseover="this.src='images/twitter_color.png';" onmousein="this.src='images/twitter_color.png';" onmouseout="this.src='images/twitter.png';" width="50" height="50" /> Twitter</A></li>
                        <li><A HREF="https://www.linkedin.com/in/nicolas-havard-7b964412a/" ><img src="images/linkedin.png" onmouseover="this.src='images/linkedin_color.png';" onmousein="this.src='images/linkedin_color.png';" onmouseout="this.src='images/linkedin.png';" width="50" height="50" /> Linkedin</A></li>
                        <li><A HREF="http://www.viadeo.com/p/0021m0ymns9cnl7j" ><img src="images/viadeo.png" onmouseover="this.src='images/viadeo_color.png';" onmousein="this.src='images/viadeo_color.png';" onmouseout="this.src='images/viadeo.png';" width="50" height="50" /> Viadeo</A></li>
                        <li><A HREF="https://github.com/Nicolas-Havard" ><img src="images/github.png" onmouseover="this.src='images/github.png';" onmousein="this.src='images/github.png';" onmouseout="this.src='images/github.png';" width="50" height="50" /> Github</A></li>
                    </ul>    
                </p>
            </article>
        </section>
        </div>
        
        <?php
            include 'struct/footer.php';
        ?>

    </body>
</html>
