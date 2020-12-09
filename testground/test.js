let veg_batar_max = 2
let batar_max = 17

let veg_auka_max = 2
let auka_max = 5

let veg_sosur_max = 8
let sosur_max = 14

let v_pontun = ""

let staerd = [
  "Stór",
  "Lítill"]

let batar = [
  "Grænmetissæla",
  "Grænmetisbuff",
  "Buffaló kjúklingur",
  "Rifið grísakjöt",
  "Steik og ostur",
  "Kalkúnabátur",
  "Grilluð kjúklingabringa",
  "Pizzabátur",
  "Kalkúnn og skinka",
  "Ítalskur B.M.T.",
  "Sterkur ítalskur",
  "Skinkubátur",
  "Hægelduð kjúklingabringa",
  "Bræðingur",
  "Teriyaki kjúklingur",
  "BLT",
  "Túnfisksalat"]

let alegg = [
  "Gúrka",
  "Tómatar",
  "Laukur",
  "Kál",
  "Spínat",
  "Paprika",
  "Jalapeno",
  "Bananapipar",
  "Ólífur",
  "Gular baunir"]

let auka = [
  "Ekkert auka",
  "Auka grænmetisbuff",
  "Auka ostur",
  "Auka beikon",
  "Auka kjúklingur"]

let allar_sosur = [
  "Hunangssinnep",
  "Vegan majónes",
  "Sætt sinnep",
  "Sætlauksósa",
  "Rauðvínsedik",
  "Sterkt sinnep",
  "Ólífuolía",
  "Pizzasósa",
  "Southwest sósa",
  "Létt majónes",
  "Sterk buffalósósa",
  "Chili majónes",
  "BBQ sósa",
  "Bernessósa",
  "Ostasósa"]

let vegan_sosur = [
  "Hunangssinnep",
  "Vegan majónes",
  "Sætt sinnep",
  "Sætlauksósa",
  "Rauðvínsedik",
  "Sterkt sinnep",
  "Ólífuolía",
  "Pizzasósa",
  "Southwest sósa"]
    
function Rnd(min, max) {
  return Math.floor(Math.random() * (max - min) ) + min;
}


function getRandom(arr, n) {
  var result = new Array(n),
    len = arr.length,
    taken = new Array(len);
  if (n > len)
    throw new RangeError("getRandom: more elements taken than available");
  while (n--) {
    var x = Math.floor(Math.random() * len);
    result[n] = arr[x in taken ? taken[x] : x];
    taken[x] = --len in taken ? taken[len] : len;
  }
  return result;
}

function textReturn(value, index, array) {
  v_pontun = v_pontun + value + "<br>";
  return v_pontun 
}

function rndBatar(max_b,max_a,sosa){
  v_pontun =""
  let v_staerd = staerd[Rnd(0,2)]
  let v_batur = batar[Rnd(0,max_b)]
  let v_auka = auka[Rnd(0,max_a)]

  let v_alegg
  let graenmeti = Rnd(1,20)
  let g_magn = Rnd(1,8)

  if (graenmeti != 1){
    v_alegg = getRandom(alegg,g_magn)
  }
  else{
    v_alegg = "Ekkert grænmeti"
  }

  let v_sosa
  let sosur = Rnd(1,20)
  let s_magn = Rnd(1,4)

  if (sosur != 1){
    v_sosa = getRandom(sosa,s_magn)
  }
  else{
    v_sosa = "Engin Sósa"
  }

  var pontun = [v_staerd,v_batur,v_auka,v_alegg,v_sosa]

  pontun.forEach(textReturn)
  return v_pontun
}