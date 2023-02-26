<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./stylesheets/style.css">
    <title>Maze Maker</title>
  </head>
  <body class='min-h-screen max-h-screen'>

      <div class="flex flex-row justify-center items-center border-b border-black">
        <div class="flex w-full max-w-7xl h-full flex-row justify-center mx-auto sm:px-6 lg:px-8" style="height:calc(var(--vh) * 7.5)">
          <button id="ResetButton" class="flex justify-center items-center mx-2 active:scale-95"><img class="w-3/4 h-3/4" src="./public/undoLight.svg"></button>
          <button id="ControllerButton" class="flex justify-center items-center mx-2 active:scale-95"><img class="w-3/4 h-3/4" src="./public/gamesLight.svg"></button>
          <button id="OptionsButton" class="flex justify-center items-center mx-2 active:scale-95"><img class="w-3/4 h-3/4" src="./public/optionsLight.svg"></button>
          <button id="SearchButton" class="flex justify-center items-center mx-2 active:scale-95"><img class="w-3/4 h-3/4" src="./public/searchLight.svg"></button>
        </div>
      </div>
    
      <div id="settingsMenu" class="fixed z-10 bg-white flex w-full h-full flex-col justify-start mx-auto overflow-y-auto">
    
        <div class="mx-auto my-4">
          <label for="display001" class="mr-8">Maze Size:</label>
          <input type="number" id="display001" name="display001" class="text-center w-24 rounded">
        </div>
    
        <div class="mx-auto my-4">
          <label for="autonew" class="mr-8">Auto-new:</label>
          <input type="checkbox" id="autonew" name="autonew" checked>
        </div>
    
        <div class="mx-auto my-4">
          <label for="autoincrement" class="mr-8">Auto-increment:</label>
          <input type="checkbox" id="autoincrement" name="autoincrement" checked>
        </div>
    
        <button id="generateMaze" class="w-24 h-12 mx-auto my-4 active:scale-95">Generate</button>
    
      </div>
    
      <div id="gameDiv">
        <div id="canvasHolder">
          <canvas id="ctx" class="mx-auto"></canvas>
        </div>
      </div>
    
      <div id="footerControls">
    
        <div id="buttonHolder">
    
          <div id="top">
            <div class="control"></div>
            <button class="control active:scale-95 flex justify-center items-center border border-black rounded-lg" id="upButton"><img src="./public/chevronUpLight.svg"></button>
            <div class="control"></div>
          </div>
    
          <div id="mid">
            <button class="control active:scale-95 flex justify-center items-center border border-black rounded-lg" id="leftButton"><img src="./public/chevronLeftLight.svg"></button>
            <div class="control"></div>
            <button class="control active:scale-95 flex justify-center items-center border border-black rounded-lg" id="rightButton"><img src="./public/chevronRightLight.svg"></button>
          </div>
    
          <div id="bot">
            <div class="control"></div>
            <button class="control active:scale-95 flex justify-center items-center border border-black rounded-lg" id="downButton"><img src="./public/chevronDownLight.svg"></button>
            <div class="control"></div>
          </div>
    
        </div>
    
      </div>
  </body>
  <script type='module' src="./javascripts/main.js"></script>
</html>
