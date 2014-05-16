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
