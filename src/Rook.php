<?php

require_once('IFigure.php');

class Rook extends Figure {
    protected array $icon = ["\u{265C}", "\u{2656}"];

    public function canMove(int $from_row, int $from_col, int $to_row, int $to_col, Board $board): bool {
        if ($from_col != $to_col && $from_row != $to_row) {
            return false;
        }
        if ($from_col == $to_col) {
            $step_col = 0;
            $step_row = $from_row > $to_row ? -1 : 1;
        } else {
            $step_row = 0;
            $step_col = $from_col > $to_col ? -1 : 1;
        }