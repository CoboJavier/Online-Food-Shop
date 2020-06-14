/*
          _____                    _____                _____                    _____                    _____                    _____                    _____            _____  
         /\    \                  /\    \              /\    \                  /\    \                  /\    \                  /\    \                  /\    \          /\    \ 
        /::\    \                /::\____\            /::\    \                /::\____\                /::\    \                /::\    \                /::\____\        /::\____\
       /::::\    \              /:::/    /            \:::\    \              /:::/    /               /::::\    \              /::::\    \              /:::/    /       /:::/    /
      /::::::\    \            /:::/    /              \:::\    \            /:::/    /               /::::::\    \            /::::::\    \            /:::/    /       /:::/    / 
     /:::/\:::\    \          /:::/    /                \:::\    \          /:::/    /               /:::/\:::\    \          /:::/\:::\    \          /:::/    /       /:::/    /  
    /:::/__\:::\    \        /:::/    /                  \:::\    \        /:::/____/               /:::/__\:::\    \        /:::/__\:::\    \        /:::/    /       /:::/    /   
   /::::\   \:::\    \      /:::/    /                   /::::\    \      /::::\    \              /::::\   \:::\    \      /::::\   \:::\    \      /:::/    /       /:::/    /    
  /::::::\   \:::\    \    /:::/    /      _____        /::::::\    \    /::::::\    \   _____    /::::::\   \:::\    \    /::::::\   \:::\    \    /:::/    /       /:::/    /     
 /:::/\:::\   \:::\    \  /:::/____/      /\    \      /:::/\:::\    \  /:::/\:::\    \ /\    \  /:::/\:::\   \:::\ ___\  /:::/\:::\   \:::\    \  /:::/    /       /:::/    /      
/:::/  \:::\   \:::\____\|:::|    /      /::\____\    /:::/  \:::\____\/:::/  \:::\    /::\____\/:::/__\:::\   \:::|    |/:::/  \:::\   \:::\____\/:::/____/       /:::/____/       
\::/    \:::\  /:::/    /|:::|____\     /:::/    /   /:::/    \::/    /\::/    \:::\  /:::/    /\:::\   \:::\  /:::|____|\::/    \:::\  /:::/    /\:::\    \       \:::\    \       
 \/____/ \:::\/:::/    /  \:::\    \   /:::/    /   /:::/    / \/____/  \/____/ \:::\/:::/    /  \:::\   \:::\/:::/    /  \/____/ \:::\/:::/    /  \:::\    \       \:::\    \      
          \::::::/    /    \:::\    \ /:::/    /   /:::/    /                    \::::::/    /    \:::\   \::::::/    /            \::::::/    /    \:::\    \       \:::\    \     
           \::::/    /      \:::\    /:::/    /   /:::/    /                      \::::/    /      \:::\   \::::/    /              \::::/    /      \:::\    \       \:::\    \    
           /:::/    /        \:::\__/:::/    /    \::/    /                       /:::/    /        \:::\  /:::/    /               /:::/    /        \:::\    \       \:::\    \   
          /:::/    /          \::::::::/    /      \/____/                       /:::/    /          \:::\/:::/    /               /:::/    /          \:::\    \       \:::\    \  
         /:::/    /            \::::::/    /                                    /:::/    /            \::::::/    /               /:::/    /            \:::\    \       \:::\    \ 
        /:::/    /              \::::/    /                                    /:::/    /              \::::/    /               /:::/    /              \:::\____\       \:::\____\
        \::/    /                \::/____/                                     \::/    /                \::/____/                \::/    /                \::/    /        \::/    /
         \/____/                  ~~                                            \/____/                  ~~                       \/____/                  \/____/          \/____/ 
                                                                                                                                                                                    

Innovating authentification game.
*/

Matter.use(
    'matter-collision-events'
);

//
// ──────────────────────────────────────────────────────────────────────────── I ──────────
//   :::::: V A R I A B L E S : :  :   :    :     :        :          :
// ──────────────────────────────────────────────────────────────────────────────────────
//
//
// ─────────────────────────────────────────────────────── DOCUMENT VARIABLES ─────
//
var gameCanvas = document.getElementById('gameCanvas'),
    gameCanvasData = {
        width: gameCanvas.offsetWidth,
        height: gameCanvas.offsetHeight
    };
// ────────────────────────────────────────────────────────────────────────────────
//
// ───────────────────────────────────────────────────────── MATTER VARIABLES ─────
//
var Engine = Matter.Engine,
    Render = Matter.Render,
    World = Matter.World,
    Bodies = Matter.Bodies,
    Body = Matter.Body,
    MouseConstraint = Matter.MouseConstraint,
    Mouse = Matter.Mouse,
    Composites = Matter.Composites;

var engine = Engine.create(),
    render = Render.create({
        element: gameCanvas,
        engine: engine,
        options: {
            width: gameCanvasData.width,
            height: gameCanvasData.height,
            wireframes: false
        },
        pixelRatio: 'auto'
    });
// ────────────────────────────────────────────────────────────────────────────────




//
// ──────────────────────────────────────────────── II ──────────
//   :::::: G A M E : :  :   :    :     :        :          :
// ──────────────────────────────────────────────────────────
//
//
// ─────────────────────────────────────────────────────────────────── GAME BODIES ─────
//
/*  Walls */
var leftWall = Bodies.rectangle(0, 0, gameCanvasData.width / 100, gameCanvasData.height * 2, {
        isStatic: true,
        render: {
            fillStyle: 'transparent',
            strokeStyle: 'transparent'
        }
    }, ),
    rightWall = Bodies.rectangle(gameCanvasData.width, 0, gameCanvasData.width / 100, gameCanvasData.height * 2, {
        isStatic: true,
        render: {
            fillStyle: 'transparent',
            strokeStyle: 'transparent'
        }
    }),
    topWall = Bodies.rectangle(0, 0, gameCanvasData.width * 2, gameCanvasData.width / 100, {
        isStatic: true,
        render: {
            fillStyle: 'transparent',
            strokeStyle: 'transparent'
        }
    }),
    bottomWall = Bodies.rectangle(0, gameCanvasData.height, gameCanvasData.width * 2, gameCanvasData.width / 100, {
        isStatic: true,
        render: {
            fillStyle: 'transparent',
            strokeStyle: 'transparent'
        }
    });
/* Goals */
var goalA = Composites.stack(gameCanvasData.width - (gameCanvasData.width / 100) * 3, (gameCanvasData.width / 100) * 5, 3, 5, 0, 0, function (x, y) {
        return Bodies.rectangle(x, y, gameCanvasData.width / 100, gameCanvasData.width / 100, {
            name: 'A',
            isStatic: false,
            render: {
                fillStyle: 'orange',
                strokeStyle: 'transparent'
            }
        });
    }),
    goalB = Composites.stack(gameCanvasData.width - (gameCanvasData.width / 100) * 3, (gameCanvasData.width / 100) * 15, 3, 5, 0, 0, function (x, y) {
        return Bodies.rectangle(x, y, gameCanvasData.width / 100, gameCanvasData.width / 100, {
            name: 'B',
            isStatic: false,
            render: {
                fillStyle: 'orange',
                strokeStyle: 'transparent'
            }
        });
    }),
    goalC = Composites.stack(gameCanvasData.width - (gameCanvasData.width / 100) * 3, (gameCanvasData.width / 100) * 25, 3, 5, 0, 0, function (x, y) {
        return Bodies.rectangle(x, y, gameCanvasData.width / 100, gameCanvasData.width / 100, {
            name: 'C',
            isStatic: false,
            render: {
                fillStyle: 'orange',
                strokeStyle: 'transparent'
            }
        });
    });

/* Maze */
var maze_1 = Bodies.rectangle(gameCanvasData.width / 20, 0, gameCanvasData.width / 100, (gameCanvasData.width / 100) * 5, {
        isStatic: true,
        render: {
            fillStyle: "#fff"

        }
    }),
    maze_2 = Bodies.rectangle(gameCanvasData.width / 2, (gameCanvasData.width / 100) * 2, gameCanvasData.width, gameCanvasData.width / 100, {
        isStatic: true,
        render: {
            fillStyle: "#fff"

        }
    });

/* Balls */
var proyectile = Matter.Bodies.circle(gameCanvasData.width / 100, gameCanvasData.height / 2, 20);

/**/
proyectile.onCollide(
    function (pair) {
        if (pair.bodyA.name === 'A' || pair.bodyA.name === 'B' || pair.bodyA.name === 'C') {
            engine.timing.timeScale = 0.02;
        }
    }
);
// ────────────────────────────────────────────────────────────────────────────────
//
// ─────────────────────────────────────────────────────────────── GAME MOUSE ─────
//
var mouse = Mouse.create(render.canvas),
    mouseConstraint = MouseConstraint.create(engine, {
        mouse: mouse,
        constraint: {
            stiffness: 0.2,
            render: {
                visible: false
            }
        }
    });
//
// ────────────────────────────────────────────────────────────── GAME CONFIG ─────
//
World.add(engine.world, mouseConstraint);
render.mouse = mouse;
World.add(engine.world, [leftWall, rightWall, topWall, bottomWall, goalA, goalB, goalC, proyectile, maze_1, maze_2]);
engine.world.gravity.y = 0;
engine.world.gravity.x = 0;
Engine.run(engine);
Render.run(render);
Render.lookAt(render, {
    min: {
        x: 0,
        y: 0
    },
    max: {
        x: gameCanvasData.width,
        y: gameCanvasData.height
    }
});
// ────────────────────────────────────────────────────────────────────────────────




//
// ────────────────────────────────────────────────────────────────────────── III ──────────
//   :::::: R E S P O N S I V E   C O N F I G : :  :   :    :     :        :          :
// ────────────────────────────────────────────────────────────────────────────────────
//
// add a function to adjust the canvas size if the screen is resized
window.onresize = function (event) {
    gameCanvas.width = window.innerWidth;
    gameCanvas.height = window.innerHeight;
    Render.run(render);
};