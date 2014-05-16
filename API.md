# Main Api
**BaseUrl**
http://www.pap.fr/iphone/v1/

## Localisation Autocompletion
```C#
POST localisation.php
```

## GPS Localisation
```C#
GET gps.php
POST json
```

## Search
```C#
POST recherche.php
TYPE json
```
```JSON
{
    "nb_annonces":"210",
    "nb_resultats":"20",
    "taille_page":"20",
    "lock":"0",
    "lock_limit":"400",
    "label":"Vente Paris 15e",
    "annonces": [
        {
            "id":"400401491",
            "nb_photos":"10",
            "photo_url":"http:\/\/static.pap.fr\/photos\/A04\/A04A1491.thumb.jpg",
            "panier":"0",
            "metro":"M\u00e9tro Javel - Andr\u00e9 Citro\u00ebn",
            "produit":"vente",
            "titre":"305 000 \u20ac",
            "soustitre":"Citro\u00ebn - Boucicaut - Paris 15e",
            "detail1":"Appartement, 31 m\u00b2",
            "detail2":"1\u00a0chambre"
        }
    ],
    "pub": {
        "top":"http:\/\/realmedia.pap.fr\/2\/PAP_IPHONE\/resultats_ventes\/386861337@Top?produit=vente&nb_pieces=N&nb_chambres=N&departement=75&ville=paris-15e&numpage=1&page=resultats_ventes&plateforme=windowsphone",
        "middle":"http:\/\/realmedia.pap.fr\/2\/PAP_IPHONE\/resultats_ventes\/377643172@Middle?produit=vente&nb_pieces=N&nb_chambres=N&departement=75&ville=paris-15e&numpage=1&page=resultats_ventes&plateforme=windowsphone",
        "bottom":"http:\/\/realmedia.pap.fr\/2\/PAP_IPHONE\/resultats_ventes\/251394874@Bottom?produit=vente&nb_pieces=N&nb_chambres=N&departement=75&ville=paris-15e&numpage=1&page=resultats_ventes&plateforme=windowsphone"
    },
    "adtech": {
        "top":"pap_app_mob_windowsphone_resultat_vente-top-5",
        "middle":"pap_app_mob_windowsphone_resultat_vente-middle-5",
        "bottom":"pap_app_mob_windowsphone_resultat_vente-bottom-5",
        "keyvalues": {
            "produit":"vente",
            "nb_pieces":"N",
            "nb_chambres":"N",
            "departement":"75",
            "ville":"paris-15e",
            "numpage":"1"
        }
    }
}
```

## Annonce Detail
```C#
POST detail.php
TYPE json
```
```JSON
{
  "id": "184908726",
  "produit": "vente",
  "date_publication": "Annonce mise \u00e0 jour le  15 mai 2014",
  "titre": "380 000 \u20ac",
  "soustitre": "Orl\u00e9ans (45000)",
  "detail1": "Maison, 200 m\u00b2",
  "detail2": "8\u00a0pi\u00e8ces, de 1 \u00e0 6\u00a0chambres",
  "accroche": "",
  "texte": "Orl\u00e9ans (45000). 1 h 05 Paris. Dans la clairi\u00e8re de la for\u00eat d'Orl\u00e9ans, avec \u00e9coles,commerces et tous services de sant\u00e9. Maison 200\u00a0m\u00b2 habitables sur 2 niveaux, situ\u00e9e \u00e0 500 m du centre, sur terrain arbor\u00e9 de 4.630\u00a0m\u00b2 cl\u00f4tur\u00e9, vue imprenable. Suite parentale, bureau, wc, cuisine am\u00e9nag\u00e9e, double s\u00e9jour avec chemin\u00e9e. Etage : 4 chambres avec salles d'eau, lingerie, salle de bains, wc. Sous-sol total : cave sur sable, garage 3 voitures, salle de jeux, chaufferie. 395.000\u00a0\u20ac. 06.88.12.19.64.",
  "telephones": [
    "06.88.12.19.64"
  ],
  "email": "0",
  "metros": "",
  "nb_photos": "2",
  "photo_urls": [
    "http:\/\/static.pap.fr\/photos\/849\/849A8726.jpg",
    "http:\/\/static.pap.fr\/photos\/849\/849B8726.jpg"
  ],
  "photo_thumbs": [
    "http:\/\/static.pap.fr\/photos\/849\/849A8726.thumb.jpg",
    "http:\/\/static.pap.fr\/photos\/849\/849B8726.thumb.jpg"
  ],
  "panier": "0",
  "commentaire": "",
  "rdv_date": "",
  "rdv_adresse": "",
  "geo_lat": "",
  "geo_lng": "",
  "geo_zoom": "",
  "site_pap": "",
  "site_perso": "",
  "pub": {
    "top": "http:\/\/realmedia.pap.fr\/2\/PAP_IPHONE\/details_ventes\/267729040@Top?page=details_ventes&typebien=maison&departement=45&ville=orleans-45000&prix=380000&surface=200&nb_pieces=8&options=garages-parkings&plateforme=windowsphone",
    "middle": "http:\/\/realmedia.pap.fr\/2\/PAP_IPHONE\/details_ventes\/749942945@Middle?page=details_ventes&typebien=maison&departement=45&ville=orleans-45000&prix=380000&surface=200&nb_pieces=8&options=garages-parkings&plateforme=windowsphone",
    "bottom": "http:\/\/realmedia.pap.fr\/2\/PAP_IPHONE\/details_ventes\/974905899@Bottom?page=details_ventes&typebien=maison&departement=45&ville=orleans-45000&prix=380000&surface=200&nb_pieces=8&options=garages-parkings&plateforme=windowsphone"
  },
  "adtech": {
    "top": "pap_app_mob_windowsphone_detail_vente-top-5",
    "middle": "pap_app_mob_windowsphone_detail_vente-middle-5",
    "bottom": "pap_app_mob_windowsphone_detail_vente-bottom-5",
    "keyvalues": {
      "typebien": "maison",
      "departement": "45",
      "ville": "orleans-45000",
      "prix": "380000",
      "surface": "200",
      "nb_pieces": "8",
      "options": "garages-parkings"
    }
  },
  "classe_energie": "E"
}
```
