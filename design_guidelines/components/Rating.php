<?php
// Rating Component Class
class Rating {
    private $rating;
    private $count;
    private $size;
    private $interactive;

    public function __construct($rating = 0, $count = 0, $size = 'md', $interactive = false) {
        $this->rating = min(5, max(0, (float)$rating));
        $this->count = (int)$count;
        $this->size = $size;
        $this->interactive = $interactive;
    }

    public function render() {
        $stars = '';
        for ($i = 1; $i <= 5; $i++) {
            if ($i <= floor($this->rating)) {
                $stars .= '<span class="airbnb-star airbnb-star--filled">★</span>';
            } elseif ($i - 0.5 <= $this->rating) {
                $stars .= '<span class="airbnb-star airbnb-star--half">★</span>';
            } else {
                $stars .= '<span class="airbnb-star airbnb-star--empty">★</span>';
            }
        }

        $html = '<div class="airbnb-rating airbnb-rating--' . $this->size . '">';
        $html .= '<div class="airbnb-rating__stars">' . $stars . '</div>';
        
        if ($this->count > 0) {
            $html .= '<span class="airbnb-rating__count">' . $this->rating . ' (' . $this->count . ')</span>';
        } else {
            $html .= '<span class="airbnb-rating__count">' . $this->rating . '</span>';
        }

        $html .= '</div>';

        return $html;
    }

    public static function renderCSS() {
        return <<<'CSS'
<style>
/* ============================================================
   RATING COMPONENT - AIRBNB STYLE
   ============================================================ */

.airbnb-rating {
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.airbnb-rating__stars {
    display: flex;
    gap: 4px;
}

.airbnb-star {
    font-size: 16px;
    line-height: 1;
}

.airbnb-star--filled {
    color: #FF385C;
}

.airbnb-star--half {
    background: linear-gradient(90deg, #FF385C 50%, #DDDDDD 50%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    color: #DDDDDD;
}

.airbnb-star--empty {
    color: #DDDDDD;
}

.airbnb-rating__count {
    font-size: 14px;
    color: #717171;
    font-weight: 500;
}

/* ── Sizes ── */

.airbnb-rating--sm .airbnb-star {
    font-size: 12px;
}

.airbnb-rating--sm .airbnb-rating__count {
    font-size: 12px;
}

.airbnb-rating--md .airbnb-star {
    font-size: 16px;
}

.airbnb-rating--md .airbnb-rating__count {
    font-size: 14px;
}

.airbnb-rating--lg .airbnb-star {
    font-size: 20px;
}

.airbnb-rating--lg .airbnb-rating__count {
    font-size: 16px;
}
</style>
CSS;
    }
}
?>
