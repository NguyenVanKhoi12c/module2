<?php


class TennisGame
{
    public $score = '';

    public function getScore($plyerOneName, $playerTowName, $m_scoreOne, $m_scoreTwo)
    {
        if ($m_scoreOne == $m_scoreTwo) {
            $this->splitPoints($m_scoreOne);
        } else if ($m_scoreOne >= 4 || $m_scoreTwo >= 4) {
            $this->rele($m_scoreOne, $m_scoreTwo);
        } else {
            $this->ScoreScored($m_scoreOne, $m_scoreTwo);
        }
    }

    public function splitPoints($m_scoreOne)
    {
        switch ($m_scoreOne) {
            case 0:
                $this->score = "Love-All";
                break;
            case 1:
                $this->score = "Fifteen-All";
                break;
            case 2:
                $this->score = "Thirty-All";
                break;
            case 3:
                $this->score = "forty-All";
                break;
            default:
                $this->score = "deo co";
                break;
        }
    }

    public function rule($m_scoreOne, $m_scoreTwo)
    {
        $minusResult = $m_scoreOne - $m_scoreTwo;
        if ($minusResult == 1) {
            $this->score = "nguoi choi co loi the 1";
        } else if ($minusResult == -1) {
            $this->score = "nguoi choi co loi the 2";
        } else if ($minusResult >= 2) {
            $this->score = "nguoi choi 1 thang";
        } else {
            $this->score = "nguoi choi 2 thang";
        }
    }

    public function ScoreScored($m_scoreOne, $m_scoreTwo)
    {
        $tempScore = 0;
        for ($i = 1; $i < 3; $i++) {
            if ($i==1){
                $tempScore = $m_scoreOne;
            } else{
                $this->score.="-"; $tempScore = $m_scoreTwo;
            }
            switch ($tempScore){
                case 0:
                    $this->score.="Love";
                    break;
                case 1:
                    $this->score.="Fifteen";
                    breakl;
                case 2:
                    $this->score.="Thirty";
                    break;
                case 3:
                    $this->score.="Forty";
                    break;
            }
        }
    }
    public function __toString()
    {
        return $this->score;
    }
}