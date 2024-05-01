<x-layout>
    <div class="hero_background">
        <div class="hero_container">
            <div>
                <p>Présenter clairement et simplement une situation de handicap.</p>
                <p class="hero_subtitle">Kijami est un outil open-source destiné à aider les personnes en situation de
                    handicap,
                    les professionnels et les familles à communiquer sur les situations de handicap et les besoins qui
                    en résultent. </p>
            </div>
            <img src="{{ URL::to('/') }}/img/hero_img.svg" class="hero_img" alt="logo du site">
        </div>
    </div>
    <div class="homepage_subtitle">
        <h1>A qui s'adresse Kijami?</h1>
    </div>
    <div class="cards_container">
        <div class="card">
            <img src="{{ URL::to('/') }}/img/personn_card.svg" class="img_card"
                alt="logo personne en situation de handicap">
            <h1 class="card_title">Personnes en situation de handicap</h1>
            <h2 class="text_card">Informer par soi-même, préciser une demande d'accès au droits, ...</h2>
        </div>
        <div class="card">
            <img src="{{ URL::to('/') }}/img/pro_card.svg" class="img_card" alt="logo professionnel de santé">
            <h1 class="card_title">Professionnels</h1>
            <h2 class="text_card">Affiner son intervention, alimenter un projet personnalisé, transmettre de façon
                précise, harmoniser les pratiques, ...</h2>
        </div>
        <div class="card">
            <img src="{{ URL::to('/') }}/img/family_card.svg" class="img_card" alt="logo familles">
            <h1 class="card_title">Familles</h1>
            <h2 class="text_card">Préciser une demande d'accès aux droits, présenter une situation dans le cadre d'une
                demande d'admission, garantir un bon relai d'accompagnement, ...</h2>
        </div>
    </div>
    <div class="explain_container">
        <img src="{{ URL::to('/') }}/img/nav_logo.svg" class="nav_logo" alt="logo du site" id="logo_explain">
        <div class="sub_explain_title">
            <img src="{{ URL::to('/') }}/img/form_img.svg" class="img_explain" alt="logo familles">
            <h3>Rediger la liste complète des besoins et compétences d'une personne en situation de handicap...</h3>
        </div>
        <div class="sub_explain_text">
            <p>Vous allez être accompagnés à remplir un descriptif détaillé de votre situation, celle d'un proche ou
                d'une personne que vous accompagnez.
                Pour vous guider, Kijami propose des formulaires combinant les évaluations les plus utilisées (GEVA,
                GIR, MDPH, ...).
            </p>
            <div class="sub_explain_title">
                <img src="{{ URL::to('/') }}/img/situation_img.svg" class="img_explain" alt="logo familles">
                <h3>A chaque situation, sa solution...</h3>
            </div>
            <div class="sub_explain_text">
                <p>Kijami a été conçu par des professionnels du médico-social qui ont fait le constat d'un ensemble de
                    besoins:</p>
                <ul>
                    <li>Des familles qui souhaitent décrire la situation d'un proche dans le cadre d'une demande
                        d'admission
                        dans un établissement. </li>
                    <li>Des professionnels qui souhaitent transmettre leurs observations dans le cadre
                        d'un projet personnalisé.</li>
                    <li>Des personnes en situation de handicap qui veulent adresser clairement leurs besoins dans le
                        contexte d'une demande d'accès aux doits.</li>
                </ul>
            </div>
            <div class="sub_explain_title">
                <img src="{{ URL::to('/') }}/img/ethic_img.svg" class="img_explain" alt="logo familles">
                <h3>Harmoniser les pratiques avec une reflexion éthique sur la question de l'évaluation</h3>
            </div>
            <div class="sub_explain_text">
                <p>Kijami propose à chaque intervenant autour de la personne en situation de handicap d'adopter un
                    vocabulaire compris de tous, qui limite les interprétations.
                    Chaque mot a un sens et un poids, aussi, Kijami s'appuie sur une réèlle éthique de l'évaluation afin
                    de
                    garantir respect et confidentialité.
                </p>
            </div>
        </div>
        <div class="sub_explain_title">
            <img src="{{ URL::to('/') }}/img/learn_img.svg" class="img_explain" alt="logo familles">
            <h3>Informer pour comprendre, comprendrer en informant</h3>
        </div>
        <div class="sub_explain_text">
            <p>Difficile de faire la différence entre une texture hachée ou moulinée, ou encore entre un lève
                personne
                et un verticalisateur?\n Kijami propose d'étayer chaque contenu par des descriptifs et définitions
                précises.
            </p>
        </div>
        <div class="sub_explain_title">
            <img src="{{ URL::to('/') }}/img/aide_img.svg" class="img_explain" alt="logo familles">
            <h3>Aider le plus grand nombre dans une démarche humaniste</h3>
        </div>
        <div class="sub_explain_text">
            <p>Kijami est entièrement gratuit. Les données collectées ne sont utilisés qu'au profit de la solution
                Kijami et ne font l'objet d'aucune autre utilisation.
            </p>
        </div>
    </div>
</x-layout>
