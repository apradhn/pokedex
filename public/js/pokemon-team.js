function Team(p1, p2, p3, p4, p5, p6) {
  this.p1 = p1;
  this.p2 = p2;
  this.p3 = p3;
  this.p4 = p4;
  this.p5 = p5;
  this.p6 = p6;
  this.averageStats = averageStats;
  this.types = types;
  this.typeDefenses = typeDefenses;
  this.typeOffenses = typeOffenses;
}

// returns an object containing the average base stats of the pokémon team
function averageStats() {
  var avgHp = (this.p1.hp + this.p2.hp + this.p3.hp + this.p4.hp + this.p5.hp + this.p6.hp) / 6;
  var avgAttack = (this.p1.attack + this.p2.attack + this.p3.attack + this.p4.attack + this.p5.attack + this.p6.attack) / 6;
  var avgDefense = (this.p1.defense + this.p2.defense + this.p3.defense + this.p4.defense + this.p5.defense + this.p6.defense) / 6;
  var avgSpAtk = (this.p1.spAtk + this.p2.spAtk + this.p3.spAtk + this.p4.spAtk + this.p5.spAtk + this.p6.spAtk) / 6;
  var avgSpDef = (this.p1.spDef + this.p2.spDef + this.p3.spDef + this.p4.spDef + this.p5.spDef + this.p6.spDef) / 6;
  var avgSpeed = (this.p1.speed + this.p2.speed + this.p3.speed + this.p4.speed + this.p5.speed + this.p6.speed) / 6;
  var avgTotal = (this.p1.total + this.p2.total + this.p3.total + this.p4.total + this.p5.total + this.p6.total) / 6;
  var averages = {
    hp: Math.round(avgHp), 
    attack: Math.round(avgAttack), 
    defense: Math.round(avgDefense), 
    spAtk: Math.round(avgSpAtk), 
    spDef: Math.round(avgSpDef), 
    speed: Math.round(avgSpeed), 
    total: Math.round(avgTotal) };
  return averages;
}

// returns an array of all the types on the pokemon team
function types() {
  var types = [];
  var pokemon = [this.p1, this.p2, this.p3, this.p4, this.p5, this.p6];
  $.each(pokemon, function(index, value) {
    types.push(value.typeA); 
    if (value.typeB != "") {
      types.push(value.typeB);
    }
  });
  return types.sort();
}

// returns an object listing the number of weaknesses for each type
function typeDefenses() {

  var typeDefenses = { normal: [], fire: [], water: [],
   electric: [], grass: [], ice: [], fighting: [],
   poison: [], ground: [], flying: [], psychic: [], 
   bug: [], rock: [], ghost: [], dragon: [], 
   dark: [], steel: [], fairy: [] };

  var team = [this.p1, this.p2, this.p3, this.p4, this.p5, this.p6];

  $.each(this.types(), function(index, type) {
    switch(type){
      case "normal":
        $.each(team, function(i, value) {
          if (value.typeA == 'normal' || value.typeB == 'normal') {
            typeDefenses.fighting.push(value.name);
          }
        });
        break;
      case "fire":
        $.each(team, function(i, value) {
          if (value.typeA == 'fire' || value.typeB == 'fire') {
            typeDefenses.water.push(value.name);
            typeDefenses.ground.push(value.name);
            typeDefenses.rock.push(value.name);
          }
        });
        break;
      case "water":
        $.each(team, function(i, value) {
          if (value.typeA == 'water' || value.typeB == 'water') {
            typeDefenses.electric.push(value.name);
            typeDefenses.grass.push(value.name);
          }
        });       
        break;
      case "electric": 
        $.each(team, function(i, value) {
          if (value.typeA == 'electric' || value.typeB == 'electric') {
            typeDefenses.ground.push(value.name);
          }
        });         
        break;
      case "grass":
        $.each(team, function(i, value) {
          if (value.typeA == 'grass' || value.typeB == 'grass') {
            typeDefenses.fire.push(value.name)
            typeDefenses.ice.push(value.name);
            typeDefenses.poison.push(value.name);
            typeDefenses.flying.push(value.name);
            typeDefenses.bug.push(value.name);          
          }
        });                 
        break;
      case "ice":
        $.each(team, function(i, value) {
          if (value.typeA == 'ice' || value.typeB == 'ice') {
            typeDefenses.fire.push(value.name);
            typeDefenses.fighting.push(value.name);
            typeDefenses.rock.push(value.name);
            typeDefenses.steel.push(value.name);            
          }
        });
        break;
      case "fighting":
        $.each(team, function(i, value) {
          if (value.typeA == 'fighting' || value.typeB == 'fighting') {
            typeDefenses.flying.push(value.name);
            typeDefenses.psychic.push(value.name);
            typeDefenses.fairy.push(value.name);              
          }
        }); 
        break;
      case "poison":
        $.each(team, function(i, value) {
          if (value.typeA == 'poison' || value.typeB == 'poison') {
            typeDefenses.ground.push(value.name);
            typeDefenses.psychic.push(value.name);            
          }
        }); 
        break;
      case "ground":
        $.each(team, function(i, value) {
          if (value.typeA == 'ground' || value.typeB == 'ground') {
            typeDefenses.water.push(value.name);
            typeDefenses.grass.push(value.name);
            typeDefenses.ice.push(value.name);
          }
        }); 
        break;
      case "flying":
        $.each(team, function(i, value) {
          if (value.typeA == 'flying' || value.typeB == 'flying') {
            typeDefenses.electric.push(value.name);
            typeDefenses.ice.push(value.name);
            typeDefenses.rock.push(value.name);         
          }
        }); 
        break;
      case "psychic":
        $.each(team, function(i, value) {
          if (value.typeA == 'psychic' || value.typeB == 'psychic') {
            typeDefenses.bug.push(value.name);
            typeDefenses.ghost.push(value.name);
            typeDefenses.dark.push(value.name);           
          }
        });   
        break;
      case "bug": 
        $.each(team, function(i, value) {
          if (value.typeA == 'bug' || value.typeB == 'bug') {
            typeDefenses.fire.push(value.name);
            typeDefenses.flying.push(value.name);
            typeDefenses.rock.push(value.name);         
          }
        });
        break;
      case "rock":
        $.each(team, function(i, value) {
          if (value.typeA == 'rock' || value.typeB == 'rock') {
            typeDefenses.water.push(value.name);
            typeDefenses.grass.push(value.name);
            typeDefenses.fighting.push(value.name);
            typeDefenses.ground.push(value.name);
            typeDefenses.steel.push(value.name);          
          }
        });   
        break;
      case "ghost":
        $.each(team, function(i, value) {
          if (value.typeA == 'ghost' || value.typeB == 'ghost') {
            typeDefenses.ghost.push(value.name);
            typeDefenses.dark.push(value.name);       
          }
        });         
        break;
      case "dragon":
        $.each(team, function(i, value) {
          if (value.typeA == 'dragon' || value.typeB == 'dragon') {
            typeDefenses.ice.push(value.name);
            typeDefenses.dragon.push(value.name);
            typeDefenses.fairy.push(value.name);        
          }
        });         
        break;
      case "dark":
        $.each(team, function(i, value) {
          if (value.typeA == 'dark' || value.typeB == 'dark') {
            typeDefenses.fighting.push(value.name);
            typeDefenses.bug.push(value.name);
            typeDefenses.fairy.push(value.name);      
          }
        });   
        break;
      case "steel":
        $.each(team, function(i, value) {
          if (value.typeA == 'steel' || value.typeB == 'steel') {
            typeDefenses.fire.push(value.name);
            typeDefenses.fighting.push(value.name);
            typeDefenses.ground.push(value.name);     
          }
        }); 
        break;
      case "fairy":
        $.each(team, function(i, value) {
          if (value.typeA == 'fairy' || value.typeB == 'fairy') {
            typeDefenses.poison.push(value.name);
            typeDefenses.steel.push(value.name);    
          }
        });   
        break;      
      default:
        break;
    }
  });

  typeDefenses.normal = typeDefenses.normal.filter(function(elem, pos) {
    return typeDefenses.normal.indexOf(elem) == pos;
  });
  typeDefenses.fire = typeDefenses.fire.filter(function(elem, pos) {
    return typeDefenses.fire.indexOf(elem) == pos;
  });
  typeDefenses.water = typeDefenses.water.filter(function(elem, pos) {
    return typeDefenses.water.indexOf(elem) == pos;
  });
  typeDefenses.electric = typeDefenses.electric.filter(function(elem, pos) {
    return typeDefenses.electric.indexOf(elem) == pos;
  });
  typeDefenses.grass = typeDefenses.grass.filter(function(elem, pos) {
    return typeDefenses.grass.indexOf(elem) == pos;
  });
  typeDefenses.ice = typeDefenses.ice.filter(function(elem, pos) {
    return typeDefenses.ice.indexOf(elem) == pos;
  });
  typeDefenses.fighting = typeDefenses.fighting.filter(function(elem, pos) {
    return typeDefenses.fighting.indexOf(elem) == pos;
  });
  typeDefenses.poison = typeDefenses.poison.filter(function(elem, pos) {
    return typeDefenses.poison.indexOf(elem) == pos;
  });
  typeDefenses.ground = typeDefenses.ground.filter(function(elem, pos) {
    return typeDefenses.ground.indexOf(elem) == pos;
  });
  typeDefenses.flying = typeDefenses.flying.filter(function(elem, pos) {
    return typeDefenses.flying.indexOf(elem) == pos;
  });
  typeDefenses.psychic = typeDefenses.psychic.filter(function(elem, pos) {
    return typeDefenses.psychic.indexOf(elem) == pos;
  });
  typeDefenses.bug = typeDefenses.bug.filter(function(elem, pos) {
    return typeDefenses.bug.indexOf(elem) == pos;
  });   
  typeDefenses.rock = typeDefenses.rock.filter(function(elem, pos) {
    return typeDefenses.rock.indexOf(elem) == pos;
  });
  typeDefenses.ghost = typeDefenses.ghost.filter(function(elem, pos) {
    return typeDefenses.ghost.indexOf(elem) == pos;
  });
  typeDefenses.dragon = typeDefenses.dragon.filter(function(elem, pos) {
    return typeDefenses.dragon.indexOf(elem) == pos;
  });   
  typeDefenses.dark = typeDefenses.dark.filter(function(elem, pos) {
    return typeDefenses.dark.indexOf(elem) == pos;
  });
  typeDefenses.steel = typeDefenses.steel.filter(function(elem, pos) {
    return typeDefenses.steel.indexOf(elem) == pos;
  });
  typeDefenses.fairy = typeDefenses.fairy.filter(function(elem, pos) {
    return typeDefenses.fairy.indexOf(elem) == pos;
  });   
  return typeDefenses;
}

// reutrsn an object listing the number of strengths for each type
function typeOffenses() {

  var typeOffenses = { normal: [], fire: [], water: [], electric: [], grass: [],
    ice: [], fighting: [], poison: [], ground: [], flying: [], psychic: [],
    bug: [], rock: [], ghost: [], dragon: [], dark: [], steel: [], fairy: []}

  var team = [this.p1, this.p2, this.p3, this.p4, this.p5, this.p6];  

  $.each(this.types(), function(index, type) {
    switch(type){
      case "fire":
        $.each(team, function(i, value) {
          if (value.typeA == 'fire' || value.typeB == 'fire') {
            typeOffenses.grass.push(value.name);
            typeOffenses.ice.push(value.name);
            typeOffenses.bug.push(value.name);
            typeOffenses.steel.push(value.name);
          }
        });       
        break;
      case "water":
        $.each(team, function(i, value) {
          if (value.typeA == 'water' || value.typeB == 'water') {
            typeOffenses.fire.push(value.name);
            typeOffenses.ground.push(value.name);
            typeOffenses.rock.push(value.name);
          }
        });       
        break;  
      case "electric":
        $.each(team, function(i, value) {
          if (value.typeA == 'electric' || value.typeB == 'electric') {
            typeOffenses.water.push(value.name);
            typeOffenses.flying.push(value.name);
          }
        });       
        break;
      case "grass":
        $.each(team, function(i, value) {
          if (value.typeA == 'grass' || value.typeB == 'grass') {
            typeOffenses.water.push(value.name);
            typeOffenses.ground.push(value.name);
            typeOffenses.rock.push(value.name);
          }
        });       
        break;  
      case "ice":
        $.each(team, function(i, value) {
          if (value.typeA == 'ice' || value.typeB == 'ice') {
            typeOffenses.grass.push(value.name);
            typeOffenses.ground.push(value.name);
            typeOffenses.flying.push(value.name);
            typeOffenses.dragon.push(value.name);           
          }
        });       
        break;  
      case "fighting":
        $.each(team, function(i, value) {
          if (value.typeA == 'fighting' || value.typeB == 'fighting') {
            typeOffenses.normal.push(value.name);
            typeOffenses.ice.push(value.name);
            typeOffenses.rock.push(value.name);
            typeOffenses.dark.push(value.name);
            typeOffenses.steel.push(value.name);            
          }
        });       
        break;  
      case "poison":
        $.each(team, function(i, value) {
          if (value.typeA == 'poison' || value.typeB == 'poison') {
            typeOffenses.grass.push(value.name);
            typeOffenses.fairy.push(value.name);
          }
        });       
        break;  
      case "ground":
        $.each(team, function(i, value) {
          if (value.typeA == 'ground' || value.typeB == 'ground') {
            typeOffenses.fire.push(value.name);
            typeOffenses.electric.push(value.name);
            typeOffenses.poison.push(value.name);
            typeOffenses.rock.push(value.name);
            typeOffenses.steel.push(value.name);
          }
        });       
        break;  
      case "flying":
        $.each(team, function(i, value) {
          if (value.typeA == 'flying' || value.typeB == 'flying') {
            typeOffenses.grass.push(value.name);
            typeOffenses.fighting.push(value.name);
            typeOffenses.bug.push(value.name);
          }
        });       
        break;  
      case "psychic":
        $.each(team, function(i, value) {
          if (value.typeA == 'psychic' || value.typeB == 'psychic') {
            typeOffenses.fighting.push(value.name);
            typeOffenses.poison.push(value.name);
          }
        });       
        break;
      case "bug":
        $.each(team, function(i, value) {
          if (value.typeA == 'bug' || value.typeB == 'bug') {
            typeOffenses.grass.push(value.name);
            typeOffenses.psychic.push(value.name);
            typeOffenses.dark.push(value.name);
          }
        });       
        break;  
      case "rock":
        $.each(team, function(i, value) {
          if (value.typeA == 'rock' || value.typeB == 'rock') {
            typeOffenses.fire.push(value.name);
            typeOffenses.ice.push(value.name);
            typeOffenses.flying.push(value.name);
            typeOffenses.bug.push(value.name);
          }
        });       
        break;
      case "ghost":
        $.each(team, function(i, value) {
          if (value.typeA == 'ghost' || value.typeB == 'ghost') {
            typeOffenses.psychic.push(value.name);
            typeOffenses.dark.push(value.name);
          }
        });       
        break;  
      case "dragon":
        $.each(team, function(i, value) {
          if (value.typeA == 'dragon' || value.typeB == 'dragon') {
            typeOffenses.dragon.push(value.name);
          }
        });       
        break;    
      case "dark":
        $.each(team, function(i, value) {
          if (value.typeA == 'dark' || value.typeB == 'dark') {
            typeOffenses.psychic.push(value.name);
            typeOffenses.ghost.push(value.name);
          }
        });       
        break;                                                                                  
      case "steel":
        $.each(team, function(i, value) {
          if (value.typeA == 'steel' || value.typeB == 'steel') {
            typeOffenses.ice.push(value.name);
            typeOffenses.rock.push(value.name);
            typeOffenses.fairy.push(value.name);
          }
        });       
        break;  
      case "fairy":
        $.each(team, function(i, value) {
          if (value.typeA == 'fairy' || value.typeB == 'fairy') {
            typeOffenses.fighting.push(value.name);
            typeOffenses.dragon.push(value.name);
            typeOffenses.dark.push(value.name);
          }
        });       
        break;          
      default:
        break;
    }   
  });

  typeOffenses.normal = typeOffenses.normal.filter(function(elem, pos) {
    return typeOffenses.normal.indexOf(elem) == pos;
  });
  typeOffenses.fire = typeOffenses.fire.filter(function(elem, pos) {
    return typeOffenses.fire.indexOf(elem) == pos;
  });
  typeOffenses.water = typeOffenses.water.filter(function(elem, pos) {
    return typeOffenses.water.indexOf(elem) == pos;
  });
  typeOffenses.electric = typeOffenses.electric.filter(function(elem, pos) {
    return typeOffenses.electric.indexOf(elem) == pos;
  });
  typeOffenses.grass = typeOffenses.grass.filter(function(elem, pos) {
    return typeOffenses.grass.indexOf(elem) == pos;
  });
  typeOffenses.ice = typeOffenses.ice.filter(function(elem, pos) {
    return typeOffenses.ice.indexOf(elem) == pos;
  });
  typeOffenses.fighting = typeOffenses.fighting.filter(function(elem, pos) {
    return typeOffenses.fighting.indexOf(elem) == pos;
  });
  typeOffenses.poison = typeOffenses.poison.filter(function(elem, pos) {
    return typeOffenses.poison.indexOf(elem) == pos;
  });
  typeOffenses.ground = typeOffenses.ground.filter(function(elem, pos) {
    return typeOffenses.ground.indexOf(elem) == pos;
  });
  typeOffenses.flying = typeOffenses.flying.filter(function(elem, pos) {
    return typeOffenses.flying.indexOf(elem) == pos;
  });
  typeOffenses.psychic = typeOffenses.psychic.filter(function(elem, pos) {
    return typeOffenses.psychic.indexOf(elem) == pos;
  });
  typeOffenses.bug = typeOffenses.bug.filter(function(elem, pos) {
    return typeOffenses.bug.indexOf(elem) == pos;
  });   
  typeOffenses.rock = typeOffenses.rock.filter(function(elem, pos) {
    return typeOffenses.rock.indexOf(elem) == pos;
  });
  typeOffenses.ghost = typeOffenses.ghost.filter(function(elem, pos) {
    return typeOffenses.ghost.indexOf(elem) == pos;
  });
  typeOffenses.dragon = typeOffenses.dragon.filter(function(elem, pos) {
    return typeOffenses.dragon.indexOf(elem) == pos;
  });   
  typeOffenses.dark = typeOffenses.dark.filter(function(elem, pos) {
    return typeOffenses.dark.indexOf(elem) == pos;
  });
  typeOffenses.steel = typeOffenses.steel.filter(function(elem, pos) {
    return typeOffenses.steel.indexOf(elem) == pos;
  });
  typeOffenses.fairy = typeOffenses.fairy.filter(function(elem, pos) {
    return typeOffenses.fairy.indexOf(elem) == pos;
  }); 

  return typeOffenses;
}

function Pokemon(name, typeA, typeB, hp, attack, defense, spAtk, spDef, speed, total) {
  this.name = name;
  this.typeA = typeA;
  this.typeB = typeB;
  this.hp = parseInt(hp);
  this.attack = parseInt(attack);
  this.defense = parseInt(defense);
  this.spAtk = parseInt(spAtk);
  this.spDef = parseInt(spDef);
  this.speed = parseInt(speed);
  this.total = parseInt(total);
}
