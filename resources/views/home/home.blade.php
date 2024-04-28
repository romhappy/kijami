<x-layout>
    <div class="hero_background">
        <div class="hero_container">
            <div>
                <p>Eclairer l'inclusion par des évaluations précises.</p>
                <p class="hero_subtitle">Un outil open-source destiné à aider les personnes en situation de handicap,
                    les professionnels et les familles à communiquer sur les situations de handicap et les besoins qui
                    en résultent. </p>
            </div>
            <img src="{{ URL::to('/') }}/img/hero_img.svg" class="hero_img" alt="logo du site">
        </div>
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
</x-layout>
