@extends('_master')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('css/team-builder.css') }}">
@stop

@section('navigation')
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" 
		      data-toggle="collapse" data-target="#navbar-pokedex">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="http://www.apradhan.me/">Abhijit Pradhan</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbar-pokedex">
				<ul class="nav navbar-nav">
					<li><a href="/">Search Pokédex</a></li>
				    <li><a href="/data-visualizations">Data Visualizations</a></li>
				    <li class="active"><a href="/team-builder">Team Builder<span class="sr-only">(current)</span></a></li>
				</ul>
			</div>
		</div>
	</nav>
@stop

@section('content')
<div class="container">
  <h1>Pokémon Team Builder</h1>
  <div class="row">
    <div class="col-sm-6 app-description">
      <p>Choose a team of 6 pokémon and click Analyze Team to get a detailed report of your team's offensive and defensive strength.</p>
    </div> 
  </div>
  <div class="row">
    <div class="team">
      <div class="row">
        <div class="col-sm-2 col-sm-offset-10">
          <div class="team-tab">
            <p id="hide-team"><i class="fa fa-minus-circle"></i> Hide Team</p>
            <p id="show-team"><i class="fa fa-plus-circle"></i> Show Team</p>
          </div>
        </div>
      </div >      
      <h2>My Team</h2>
      <div class="row">
        <div class="col-sm-4 cell-1">
          <div class="pokemon">
            <div class="row">
              <div class="col-sm-6">
                <div alt="pokéball icon" class="sprite"></div>
                <div class="description row">
                  <div class="name col-sm-12"></div>
                  <div class="typeA col-sm-12"></div>
                  <div class="typeB col-sm-12"></div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="change btn btn-default"><span><i class="fa fa-pencil"></i> Change</span></div>                  
                  </div>              
                </div>                                        
              </div>
              <div class="col-sm-6">
                <p class="description-none">None Selected</p>
                <div class="description">
                  <table class="table table-bordered">
                    <caption>Base Stats</caption>
                    <tbody>
                      <tr>
                        <td scope="row">HP</td>
                        <td class="hp"></td>
                      </tr>
                      <tr>
                        <td scope="row">Attack</td>
                        <td class="attack"></td>
                      </tr>  
                      <tr>
                        <td scope="row">Defense</td>
                        <td class="defense"></td>
                      </tr> 
                      <tr>
                        <td scope="row">Sp. Atk</td>
                        <td class="spAtk"></td>
                      </tr>     
                      <tr>
                        <td scope="row">Sp. Def</td>
                        <td class="spDef"></td>
                      </tr>  
                      <tr>
                        <td scope="row">Speed</td>
                        <td class="speed"></td>
                      </tr>
                      <tr>
                        <td scope="row">Total</td>
                        <td class="total"></td>
                      </tr>                                
                    </tbody>
                  </table>
                </div>
              </div>              
            </div>
          </div>             
          <div class='search-form'>
            <div class='form-group'>
              <input type='text' class='form-control' name='query'>
            </div>
            <button class='btn btn-default search'>Search</button>
            <button class='btn btn-default random'>Random</button>
            <br>
            <select name='options' class='search-results'></select>
            <button class='btn btn-default select'>Select</button>
          </div>
        </div>
        <div class="col-sm-4 cell-2">
          <div class="pokemon">
            <div class="row">
              <div class="col-sm-6">
                <div alt="pokéball icon" class="sprite"></div>
                <div class="description row">
                  <div class="name col-sm-12"></div>
                  <div class="typeA col-sm-12"></div>
                  <div class="typeB col-sm-12"></div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="change btn btn-default"><span><i class="fa fa-pencil"></i> Change</span></div>                  
                  </div>              
                </div>                                        
              </div>
              <div class="col-sm-6">
                <p class="description-none">None Selected</p>
                <div class="description">
                  <table class="table table-bordered">
                    <caption>Base Stats</caption>
                    <tbody>
                      <tr>
                        <td scope="row">HP</td>
                        <td class="hp"></td>
                      </tr>
                      <tr>
                        <td scope="row">Attack</td>
                        <td class="attack"></td>
                      </tr>  
                      <tr>
                        <td scope="row">Defense</td>
                        <td class="defense"></td>
                      </tr> 
                      <tr>
                        <td scope="row">Sp. Atk</td>
                        <td class="spAtk"></td>
                      </tr>     
                      <tr>
                        <td scope="row">Sp. Def</td>
                        <td class="spDef"></td>
                      </tr>  
                      <tr>
                        <td scope="row">Speed</td>
                        <td class="speed"></td>
                      </tr>
                      <tr>
                        <td scope="row">Total</td>
                        <td class="total"></td>
                      </tr>                                
                    </tbody>
                  </table>
                </div>
              </div>              
            </div>
          </div>   
          <div class='search-form'>
            <div class='form-group'>
              <input type='text' class='form-control' name='query'>
            </div>
            <button class='btn btn-default search'>Search</button>
            <button class='btn btn-default random'>Random</button>

            <br>
            <select name='options' class='search-results'></select>
            <button class='btn btn-default select'>Select</button>
          </div>                    
        </div>

        <div class="col-sm-4 cell-3">
          <div class="pokemon">
            <div class="row">
              <div class="col-sm-6">
                <div alt="pokéball icon" class="sprite"></div>
                <div class="description row">
                  <div class="name col-sm-12"></div>
                  <div class="typeA col-sm-12"></div>
                  <div class="typeB col-sm-12"></div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="change btn btn-default"><span><i class="fa fa-pencil"></i> Change</span></div>                  
                  </div>              
                </div>                                        
              </div>
              <div class="col-sm-6">
                <p class="description-none">None Selected</p>
                <div class="description">
                  <table class="table table-bordered">
                    <caption>Base Stats</caption>
                    <tbody>
                      <tr>
                        <td scope="row">HP</td>
                        <td class="hp"></td>
                      </tr>
                      <tr>
                        <td scope="row">Attack</td>
                        <td class="attack"></td>
                      </tr>  
                      <tr>
                        <td scope="row">Defense</td>
                        <td class="defense"></td>
                      </tr> 
                      <tr>
                        <td scope="row">Sp. Atk</td>
                        <td class="spAtk"></td>
                      </tr>     
                      <tr>
                        <td scope="row">Sp. Def</td>
                        <td class="spDef"></td>
                      </tr>  
                      <tr>
                        <td scope="row">Speed</td>
                        <td class="speed"></td>
                      </tr>
                      <tr>
                        <td scope="row">Total</td>
                        <td class="total"></td>
                      </tr>                                
                    </tbody>
                  </table>
                </div>
              </div>              
            </div>
          </div>       
          <div class='search-form'>
            <div class='form-group'>
              <input type='text' class='form-control' name='query'>
            </div>
            <button class='btn btn-default search'>Search</button>
            <button class='btn btn-default random'>Random</button>            
            <br>
            <select name='options' class='search-results'></select>
            <button class='btn btn-default select'>Select</button>
          </div>                  
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 cell-4">
          <div class="pokemon">
            <div class="row">
              <div class="col-sm-6">
                <div alt="pokéball icon" class="sprite"></div>
                <div class="description row">
                  <div class="name col-sm-12"></div>
                  <div class="typeA col-sm-12"></div>
                  <div class="typeB col-sm-12"></div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="change btn btn-default"><span><i class="fa fa-pencil"></i> Change</span></div>                  
                  </div>              
                </div>                                        
              </div>
              <div class="col-sm-6">
                <p class="description-none">None Selected</p>
                <div class="description">
                  <table class="table table-bordered">
                    <caption>Base Stats</caption>
                    <tbody>
                      <tr>
                        <td scope="row">HP</td>
                        <td class="hp"></td>
                      </tr>
                      <tr>
                        <td scope="row">Attack</td>
                        <td class="attack"></td>
                      </tr>  
                      <tr>
                        <td scope="row">Defense</td>
                        <td class="defense"></td>
                      </tr> 
                      <tr>
                        <td scope="row">Sp. Atk</td>
                        <td class="spAtk"></td>
                      </tr>     
                      <tr>
                        <td scope="row">Sp. Def</td>
                        <td class="spDef"></td>
                      </tr>  
                      <tr>
                        <td scope="row">Speed</td>
                        <td class="speed"></td>
                      </tr>
                      <tr>
                        <td scope="row">Total</td>
                        <td class="total"></td>
                      </tr>                                
                    </tbody>
                  </table>
                </div>
              </div>              
            </div>
          </div>      
          <div class='search-form'>
            <div class='form-group'>
              <input type='text' class='form-control' name='query'>
            </div>
            <button class='btn btn-default search'>Search</button>
            <button class='btn btn-default random'>Random</button>            
            <br>
            <select name='options' class='search-results'></select>
            <button class='btn btn-default select'>Select</button>
          </div>                  
        </div>
        <div class="col-sm-4 cell-5">
          <div class="pokemon">
            <div class="row">
              <div class="col-sm-6">
                <div alt="pokéball icon" class="sprite"></div>
                <div class="description row">
                  <div class="name col-sm-12"></div>
                  <div class="typeA col-sm-12"></div>
                  <div class="typeB col-sm-12"></div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="change btn btn-default"><span><i class="fa fa-pencil"></i> Change</span></div>                  
                  </div>              
                </div>                                        
              </div>
              <div class="col-sm-6">
                <p class="description-none">None Selected</p>
                <div class="description">
                  <table class="table table-bordered">
                    <caption>Base Stats</caption>
                    <tbody>
                      <tr>
                        <td scope="row">HP</td>
                        <td class="hp"></td>
                      </tr>
                      <tr>
                        <td scope="row">Attack</td>
                        <td class="attack"></td>
                      </tr>  
                      <tr>
                        <td scope="row">Defense</td>
                        <td class="defense"></td>
                      </tr> 
                      <tr>
                        <td scope="row">Sp. Atk</td>
                        <td class="spAtk"></td>
                      </tr>     
                      <tr>
                        <td scope="row">Sp. Def</td>
                        <td class="spDef"></td>
                      </tr>  
                      <tr>
                        <td scope="row">Speed</td>
                        <td class="speed"></td>
                      </tr>
                      <tr>
                        <td scope="row">Total</td>
                        <td class="total"></td>
                      </tr>                                
                    </tbody>
                  </table>
                </div>
              </div>              
            </div>
          </div>   
          <div class='search-form'>
            <div class='form-group'>
              <input type='text' class='form-control' name='query'>
            </div>
            <button class='btn btn-default search'>Search</button>
            <button class='btn btn-default random'>Random</button>            
            <br>
            <select name='options' class='search-results'></select>
            <button class='btn btn-default select'>Select</button>
          </div>                   
        </div>
        <div class="col-sm-4 cell-6">
          <div class="pokemon">
            <div class="row">
              <div class="col-sm-6">
                <div alt="pokéball icon" class="sprite"></div>
                <div class="description row">
                  <div class="name col-sm-12"></div>
                  <div class="typeA col-sm-12"></div>
                  <div class="typeB col-sm-12"></div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="change btn btn-default"><span><i class="fa fa-pencil"></i> Change</span></div>                  
                  </div>              
                </div>                                        
              </div>
              <div class="col-sm-6">
                <p class="description-none">None Selected</p>
                <div class="description">
                  <table class="table table-bordered">
                    <caption>Base Stats</caption>
                    <tbody>
                      <tr>
                        <td scope="row">HP</td>
                        <td class="hp"></td>
                      </tr>
                      <tr>
                        <td scope="row">Attack</td>
                        <td class="attack"></td>
                      </tr>  
                      <tr>
                        <td scope="row">Defense</td>
                        <td class="defense"></td>
                      </tr> 
                      <tr>
                        <td scope="row">Sp. Atk</td>
                        <td class="spAtk"></td>
                      </tr>     
                      <tr>
                        <td scope="row">Sp. Def</td>
                        <td class="spDef"></td>
                      </tr>  
                      <tr>
                        <td scope="row">Speed</td>
                        <td class="speed"></td>
                      </tr>
                      <tr>
                        <td scope="row">Total</td>
                        <td class="total"></td>
                      </tr>                                
                    </tbody>
                  </table>
                </div>
              </div>              
            </div>
          </div>    
          <div class='search-form'>
            <div class='form-group'>
              <input type='text' class='form-control' name='query'>
            </div>
            <button class='btn btn-default search'>Search</button>
            <button class='btn btn-default random'>Random</button>            
            <br>
            <select name='options' class='search-results'></select>
            <div class='btn btn-default select'>Select</div>
          </div>                     
        </div>
      </div> 
    </div>      
  </div>
  <div class="row">
    <div class="col-sm-6">
      <button class="btn btn-default calculate"><i class="fa fa-bar-chart"></i> Analyze Team</button>
    </div>   
    <div class="col-sm-2 col-sm-offset-4">
      <div class="data-tab">
        <p id="hide-data"><i class="fa fa-minus-circle"></i> Hide Data</p>
        <p id="show-data"><i class="fa fa-plus-circle"></i> Show Data</p>
      </div>
      
    </div> 
  </div>   
  <div class="team-data">
    <div class="row">
      <div class="col-sm-6">
        <h2>Report</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="panel panel-default panel-report">
          <h4 class="report-heading"># of Pokémon weak to each type</h4>
          <!-- <canvas id="heatmap-defense" width="500" height="300"></canvas>  -->
          <svg id="heatmap-defense" width="500" height="300"></svg>          
        </div>
      </div>
      <div class="col-sm-6">
        <div class="panel panel-default panel-report">
          <h4 class="report-heading"># of Pokémon super-effective against each type</h4>
          <svg id="heatmap-offense" width="500" height="300"></svg>            
        </div>
      </div>
    </div>   
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <div class="panel panel-default">
            <h3 class="report-heading">Average Base Stats</h3>
            <div class="row">
              <svg id="bar-graph" width="800" height="320"></svg>
            </div>
        </div>
      </div>
    </div>
  </div>

</div>
@stop

@section('footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js"></script>    
<script src="{{ asset('js/pokemon-team.js') }}"></script>
<script src="{{ asset('js/pokemon_list.js') }}"></script>
<script src="{{ asset('js/team-builder.js') }}"></script>
@stop