<?php

// Create class "Movie"
class Movie {
    public $title;
    public $director;
    public $plot;
    public $cast;
    
    // Costructor
    function __construct($title, $director, $cast) {
        $this->title = $title;
        $this->director = $director;
        $this->cast = $cast;
    }

    // Get Excerpt from plot
    public function getExcerpt() {
        return substr($this->plot, 0, 200);
    }
};

// Create instance 1

$Life_Aquatic = new Movie('The Life Aquatic with Steve Zissou', 'Wes Anderson', ['Bill Murray', 'Owen Wilson', 'Cate Blanchett', 'Angelica Huston']);
$Life_Aquatic->plot = 'While oceanographer Steve Zissou is working on his latest documentary at sea, his best friend and chief diver, Esteban du Plantier, is eaten by a 10-meter-long, luminescently-spotted creature Zissou describes as a "jaguar shark". Fictional marine animals like the crayon ponyfish and sugar crab also appear as props throughout the film. For his next project, Zissou is determined to document the shark\'s destruction.
                        The crew aboard Zissou\'s aging research vessel Belafonte includes his estranged wife Eleanor, chief strategist and financial backer; Pelé dos Santos, a safety expert and Brazilian guitarist who sings David Bowie songs in Portuguese; and Klaus Daimler, the German first mate who views Zissou and Esteban as father figures. Minor crew members include Vikram Ray, cameraman; Bobby Ogata, frogman; Vladimir Wolodarsky, physicist and soundtrack composer; Renzo Pietro, sound man; and Anne-Marie Sakowitz, a script girl who is often seen topless. Also included is a recent group of unpaid interns from the University of North Alaska. However, the "Team Zissou" venture has hit a decline; they have not released a successful documentary in nine years.
                        Ned Plimpton is a longtime Zissou fan whose mother has recently died, and he believes that Zissou is his father. After they meet at Zissou\'s latest premiere, Ned takes annual leave from his job as an airline pilot in Kentucky to join his crew. As Oseary Drakoulias, Zissou\'s producer, can not find anyone to finance their latest documentary, Ned offers his inheritance. Eleanor feels her husband is taking advantage of Ned and leaves. A pregnant reporter, Jane Winslett-Richardson, comes to chronicle the voyage. Both Ned and Zissou are attracted to Jane, and a competition develops between them. Klaus becomes jealous of the attention Zissou pays to Ned.
                        On their mission to find the jaguar shark, the Belafonte steals tracking equipment from a remote station owned by Alistair Hennessey, a more successful oceanographer and Zissou\'s nemesis. They then sail into unprotected waters and are attacked by Filipino pirates, who steal Ned\'s money and kidnap Bill Ubell, a "bond company stooge" assigned to the project. They are then rescued by Hennessey and towed to Port-au-Patois. Sakowitz, along with all but one of the interns, jumps ship once they reach port.
                        Zissou convinces Eleanor to rejoin the Belafonte, and then leads the crew on a rescue mission. They track Bill to an abandoned hotel on a remote island, saving him along with Hennessey, whom the pirates have also kidnapped. Ned and Zissou then make one last search for the shark in the ship\'s helicopter, but the aircraft malfunctions and they crash. Ned dies from his injuries and is buried at sea. Prior to Ned\'s death, Eleanor revealed to Jane that Zissou is sterile; therefore Ned could not have been his son.
                        Zissou finally tracks down the shark in a submersible but he decides not to kill it, both because of its beauty and not having any more dynamite. At the premiere of the finished documentary (which is dedicated to Ned), Zissou receives a standing ovation while waiting outside the theater for the premiere to finish. The crew returns triumphantly to the ship the next day.';

// Create instance 2

$Borat = new Movie ('Borat', 'Larry Charles', ['Sasha Baron Cohen', 'Ken Davitian', 'Luenell', 'Pamela Anderson']);
$Borat->plot = 'At the behest of the Kazakh Ministry of Information, reporter Borat Sagdiyev leaves Kazakhstan for the "US and A", the "Greatest Country in the World", to make a documentary about American society and culture. He leaves behind his wife, Oksana; his companions are his producer, Azamat Bagatov, and a pet hen.
                In New York City, Borat sees an episode of Baywatch on TV and immediately falls in love with Pamela Anderson\'s character, C. J. Parker. While interviewing and mocking a panel of feminists, he learns of the actress\' name and her residence in California. Borat is then informed by telegram that Oksana has been killed by a bear. Delighted, he resolves to travel to California and make Anderson his new wife. They decide not to fly, "in case the Jews repeat their attack of 9/11". Borat takes driving lessons and buys a dilapidated ice-cream truck for the journey.
                During the trip, Borat acquires a Baywatch booklet and continues gathering footage for his documentary. He meets gay pride parade participants, politicians Alan Keyes and Bob Barr, and African-American youths. Borat is also interviewed on a local television station and proceeds to disrupt the weather report. Visiting a rodeo, Borat excites the crowd with jingoistic remarks, but then sings a fictional Kazakhstani national anthem to the tune of "The Star-Spangled Banner", receiving a strong negative reaction.
                Staying at a bed-and-breakfast, Borat and Azamat are stunned to learn their hosts are Jewish. The two escape after throwing money at two woodlice, believing they are their hosts transformed. Borat attempts to buy a handgun to defend himself, but is turned away because he is not an American citizen, so he buys a bear instead.
                An etiquette coach suggests Borat attend a private dinner at an eating club in the South. During the dinner, he offends the other guests when he lets Luenell, an African-American prostitute, into the house and shows her to the table: they are both kicked out. Borat befriends Luenell, who invites him into a relationship with her, but he tells her that he is in love with someone else. Borat then visits an antique shop, in which he clumsily breaks various Confederate heritage items.
                At a hotel, Borat sees Azamat masturbating over a picture of Pamela Anderson. An angry Borat accidentally reveals his real motive for travelling to California. Azamat becomes livid at Borat\'s deception, and the situation escalates into a nude brawl which spills out into the hallway, a crowded elevator, and then into a packed convention ballroom.
                Azamat abandons Borat, taking his passport, all of their money, and their bear. Borat\'s truck runs out of fuel, and he begins to hitchhike to California. He is soon picked up by drunken fraternity brothers from the University of South Carolina. On learning the reason for his trip, they show him the Pam and Tommy sex tape which reveals that she is not a virgin. Despondent, Borat burns the Baywatch booklet and, by mistake, his return ticket to Kazakhstan.
                Borat attends a United Pentecostal camp meeting, at which Republican U.S. Representative Chip Pickering and Mississippi Supreme Court Chief Justice James W. Smith, Jr. are present. He regains his faith and forgives Azamat and Pamela. He accompanies church members on a bus to Los Angeles and disembarks to find Azamat dressed as Oliver Hardy, although Borat mistakes him for Adolf Hitler. The two reconcile and Azamat tells Borat where to find Pamela Anderson. Borat finally comes face-to-face with Anderson at a book signing at a Virgin Megastore. After showing Anderson his "traditional marriage sack", Borat pursues her throughout the store in an attempt to abduct her, until security guards intervene.
                Borat visits Luenell and they return to Kazakhstan together. They bring several American customs and traditions back to his village, including the apparent conversion of the people to Christianity (the Kazakh version of which includes crucifixion and torturing of Jews) and the introduction of computer-based technology, such as iPods, laptop computers and a high-definition television.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <h1>Movie List</h1>
    <div class="content">
        <div class="movie">
            <h2><?php echo $Life_Aquatic->title ?></h2>
            <h4>Directed by: <?php echo $Life_Aquatic->director ?></h4>
            <div class="cast">
                <strong>Cast:</strong>
                    <ul>
                        <?php foreach($Life_Aquatic->cast as $cast) { ?>
                        <li><?php echo $cast ?></li>
                        <?php } ?>
                    </ul>
            </div>
            <div class="plot">
                <strong>Plot: </strong> <?php echo $Life_Aquatic->getExcerpt(); ?>
            </div>
        </div>
        <div class="movie">
            <h2><?php echo $Borat->title ?></h2>
            <h4>Directed by: <?php echo $Borat->director ?></h4>
            <div class="cast">
                <strong>Cast:</strong>
                    <ul>
                        <?php foreach($Borat->cast as $cast) { ?>
                        <li><?php echo $cast ?></li>
                        <?php } ?>
                    </ul>
            </div>
            <div class="plot">
                <strong>Plot: </strong> <?php echo $Borat->getExcerpt(); ?>
            </div>
        </div>
    </div>
    
</body>
</html>