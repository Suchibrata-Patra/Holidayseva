<?php
// Card Component Class
class Card {
    private $title;
    private $description;
    private $image;
    private $variant;
    private $footer;
    private $content;

    public function __construct($title = '', $variant = 'default') {
        $this->title = $title;
        $this->variant = $variant;
        $this->content = '';
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    public function setImage($image) {
        $this->image = $image;
        return $this;
    }

    public function setFooter($footer) {
        $this->footer = $footer;
        return $this;
    }

    public function setContent($content) {
        $this->content = $content;
        return $this;
    }

    public function render() {
        $html = '<div class="airbnb-card airbnb-card--' . $this->variant . '">';

        if ($this->image) {
            $html .= '<div class="airbnb-card__image" style="background-image: url(\'' . htmlspecialchars($this->image) . '\')"></div>';
        }

        $html .= '<div class="airbnb-card__content">';

        if ($this->title) {
            $html .= '<h3 class="airbnb-card__title">' . htmlspecialchars($this->title) . '</h3>';
        }

        if ($this->description) {
            $html .= '<p class="airbnb-card__description">' . htmlspecialchars($this->description) . '</p>';
        }

        if ($this->content) {
            $html .= $this->content;
        }

        $html .= '</div>';

        if ($this->footer) {
            $html .= '<div class="airbnb-card__footer">' . $this->footer . '</div>';
        }

        $html .= '</div>';

        return $html;
    }

    public static function renderCSS() {
        return <<<'CSS'
<style>
/* ============================================================
   CARD COMPONENT - AIRBNB STYLE
   ============================================================ */

.airbnb-card {
    background: white;
    border-radius: 12px;
    border: 1px solid #EBEBEB;
    overflow: hidden;
    transition: all 0.3s ease;
}

.airbnb-card:hover {
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    border-color: #DDDDDD;
}

.airbnb-card__image {
    width: 100%;
    height: 240px;
    background-size: cover;
    background-position: center;
    position: relative;
}

.airbnb-card__content {
    padding: 16px;
}

.airbnb-card__title {
    font-size: 16px;
    font-weight: 600;
    color: #222222;
    margin-bottom: 8px;
    line-height: 1.4;
}

.airbnb-card__description {
    font-size: 14px;
    color: #717171;
    line-height: 1.5;
    margin-bottom: 12px;
}

.airbnb-card__footer {
    padding: 12px 16px;
    border-top: 1px solid #EBEBEB;
    background: #f7f7f7;
}

/* ── Variants ── */

.airbnb-card--elevated {
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    border-color: transparent;
}

.airbnb-card--elevated:hover {
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
}

.airbnb-card--flat {
    background: #f7f7f7;
    border-color: #EBEBEB;
}

.airbnb-card--flat:hover {
    background: #f0f0f0;
}

.airbnb-card--outline {
    border: 2px solid #DDDDDD;
}

.airbnb-card--outline:hover {
    border-color: #FF385C;
}
</style>
CSS;
    }
}
?>
