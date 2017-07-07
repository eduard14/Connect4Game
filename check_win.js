// checks for a winner, if there is the game is reset and resets the tables in server




function checkForWin (columnNumber, winningMove){         // calls this after every 24 hours
                                                          // winningMove is the team which made the move
        checkColumn (columnNumber, winningMove);
        checkRow (winningMove);
        checkDiagonal (winningMove);

        if (numMoves = 42){

            //todo call draw & reset game
        }

}

function checkColumn (columnNumber, winningMove){

    for (var i = 0; i < 7; i++){                           // iterate through the columns and check if they have any 4 in a row

        // todo gets each column array and iterates through them to check

    }

}
