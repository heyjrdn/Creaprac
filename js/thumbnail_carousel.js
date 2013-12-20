var _thumbnails = new Array();
var _current_thumbnail = 0;

function preloadThumbnails(language)
{
    _thumbnails[0] = "../img/products/thumbnails/" + language + "/TirapracL.jpg";
    _thumbnails[1] = "../img/products/thumbnails/" + language + "/Zocloprac.jpg";
    _thumbnails[2] = "../img/products/thumbnails/" + language + "/Seprac.jpg";
    _thumbnails[3] = "../img/products/thumbnails/" + language + "/SepracNG.jpg";
    _thumbnails[4] = "../img/products/thumbnails/" + language + "/Cubreprac.jpg";
    _thumbnails[5] = "../img/products/thumbnails/" + language + "/CenefapracL.jpg";
    _thumbnails[6] = "../img/products/thumbnails/" + language + "/Cenefas.jpg";
    _thumbnails[7] = "../img/products/thumbnails/" + language + "/Listelprac.jpg";
    _thumbnails[8] = "../img/products/thumbnails/" + language + "/Mosaicprac.jpg";
    _thumbnails[9] = "../img/products/thumbnails/" + language + "/Espejoprac.jpg";
    _thumbnails[10] = "../img/products/thumbnails/" + language + "/Muebleprac.jpg";
    _thumbnails[11] = "../img/products/thumbnails/" + language + "/Doorprac.jpg";
    _thumbnails[12] = "../img/products/thumbnails/" + language + "/DoorpracNG.jpg";
    _thumbnails[13] = "../img/products/thumbnails/" + language + "/Escalprac.jpg";
    _thumbnails[14] = "../img/products/thumbnails/" + language + "/EscalpracAL.jpg";
    _thumbnails[15] = "../img/products/thumbnails/" + language + "/Vidrioprac.jpg";
    _thumbnails[16] = "../img/products/thumbnails/" + language + "/Instalprac.jpg";
    _thumbnails[17] = "../img/products/thumbnails/" + language + "/Canalprac.jpg";
    _thumbnails[18] = "../img/products/thumbnails/" + language + "/Taqueteprac.jpg";
    _thumbnails[19] = "../img/products/thumbnails/" + language + "/GrapapracR.jpg";
    _thumbnails[20] = "../img/products/thumbnails/" + language + "/GrapapracP.jpg";
    _thumbnails[21] = "../img/products/thumbnails/" + language + "/Monturaprac.jpg";
    _thumbnails[22] = "../img/products/thumbnails/" + language + "/Cinchoprac.jpg";
    _thumbnails[23] = "../img/products/thumbnails/" + language + "/Regaderaprac.jpg";
    _thumbnails[24] = "../img/products/thumbnails/" + language + "/Recubrimiento.jpg";
    _thumbnails[25] = "../img/products/thumbnails/" + language + "/Gomaprac.jpg";
    _thumbnails[26] = "../img/products/thumbnails/" + language + "/Bridaprac.jpg";
    _thumbnails[27] = "../img/products/thumbnails/" + language + "/Bridaprac2.jpg";
    _thumbnails[28] = "../img/products/thumbnails/" + language + "/Juntaprac.jpg";
    _thumbnails[29] = "../img/products/thumbnails/" + language + "/Lavaboprac.jpg";
    _thumbnails[30] = "../img/products/thumbnails/" + language + "/Viseprac.jpg";
    _thumbnails[31] = "../img/products/thumbnails/" + language + "/Mezclaprac.jpg";
    _thumbnails[32] = "../img/products/thumbnails/" + language + "/Sanitario.jpg";
    _thumbnails[33] = "../img/products/thumbnails/" + language + "/Tiraprac.jpg";

    for (var i = _thumbnails.length - 1; i >= 0; i--) {
        document.getElementById( "_thumbnail" ).src = _thumbnails[i];
    };
}

function carousel()
{
    document.getElementById( "_thumbnail" ).src = _thumbnails[ _current_thumbnail ];

    if (_current_thumbnail == _thumbnails.length - 1)
    {
        _current_thumbnail = 0;
    }
    else
    {
        _current_thumbnail++;
    }

    window.setTimeout(carousel, 1500);
}