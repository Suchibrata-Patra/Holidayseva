<?php
// Button Component Class
class Button {
    private $text;
    private $variant;
    private $size;
    private $href;
    private $disabled;
    private $icon;
    private $fullWidth;

    public function __construct($text = '', $variant = 'primary', $size = 'md') {
        $this->text = $text;
        $this->variant = $variant;
        $this->size = $size;
        $this->disabled = false;
        $this->fullWidth = false;
    }

    public function setHref($href) {
        $this->href = $href;
        return $this;
    }

    public function setDisabled($disabled) {
        $this->disabled = $disabled;
        return $this;
    }

    public function setIcon($icon) {
        $this->icon = $icon;
        return $this;
    }

    public function setFullWidth($fullWidth) {
        $this->fullWidth = $fullWidth;
        return $this;
    }

    public function render() {
        $tag = isset($this->href) ? 'a' : 'button';
        $attributes = '';
        
        if ($tag === 'a') {
            $attributes .= ' href="' . htmlspecialchars($this->href) . '"';
        } else {
            if ($this->disabled) {
                $attributes .= ' disabled';
            }
        }

        $width = $this->fullWidth ? 'width: 100%;' : '';
        
        $icon_html = $this->icon ? '<span style="margin-right: 8px;">' . $this->icon . '</span>' : '';

        return '<' . $tag . ' class="airbnb-btn airbnb-btn--' . $this->variant . ' airbnb-btn--' . $this->size . '" style="' . $width . '" ' . $attributes . '>' . 
               $icon_html . 
               htmlspecialchars($this->text) . 
               '</' . $tag . '>';
    }

    public static function renderCSS() {
        return <<<'CSS'
<style>
/* ============================================================
   BUTTON COMPONENT - AIRBNB STYLE
   ============================================================ */

.airbnb-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 12px 24px;
    border-radius: 8px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Helvetica Neue', sans-serif;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    border: none;
    transition: all 0.2s ease;
    text-decoration: none;
    white-space: nowrap;
    user-select: none;
    outline: none;
}

.airbnb-btn:focus-visible {
    box-shadow: 0 0 0 3px rgba(255, 56, 92, 0.1), 0 0 0 1px #FF385C;
}

.airbnb-btn:disabled {
    opacity: 0.5;
    cursor: not-allowed;
}

/* ── Variants ── */

.airbnb-btn--primary {
    background: #FF385C;
    color: white;
}

.airbnb-btn--primary:hover:not(:disabled) {
    background: #E31C5F;
    box-shadow: 0 4px 12px rgba(255, 56, 92, 0.25);
    transform: translateY(-2px);
}

.airbnb-btn--primary:active:not(:disabled) {
    transform: translateY(0);
}

.airbnb-btn--secondary {
    background: #222222;
    color: white;
}

.airbnb-btn--secondary:hover:not(:disabled) {
    background: #000;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    transform: translateY(-2px);
}

.airbnb-btn--secondary:active:not(:disabled) {
    transform: translateY(0);
}

.airbnb-btn--outline {
    background: transparent;
    color: #222222;
    border: 1.5px solid #DDDDDD;
}

.airbnb-btn--outline:hover:not(:disabled) {
    border-color: #222222;
    background: #f7f7f7;
}

.airbnb-btn--ghost {
    background: transparent;
    color: #222222;
    border: none;
}

.airbnb-btn--ghost:hover:not(:disabled) {
    background: #f0f0f0;
}

.airbnb-btn--danger {
    background: #C13515;
    color: white;
}

.airbnb-btn--danger:hover:not(:disabled) {
    background: #A82C10;
    box-shadow: 0 4px 12px rgba(193, 53, 21, 0.25);
    transform: translateY(-2px);
}

.airbnb-btn--text {
    background: transparent;
    color: #FF385C;
    border: none;
    padding: 8px 12px;
}

.airbnb-btn--text:hover:not(:disabled) {
    background: rgba(255, 56, 92, 0.06);
}

/* ── Sizes ── */

.airbnb-btn--sm {
    padding: 8px 16px;
    font-size: 13px;
    border-radius: 6px;
}

.airbnb-btn--md {
    padding: 12px 24px;
    font-size: 14px;
    border-radius: 8px;
}

.airbnb-btn--lg {
    padding: 16px 32px;
    font-size: 16px;
    border-radius: 8px;
}

.airbnb-btn--xl {
    padding: 18px 36px;
    font-size: 16px;
    border-radius: 8px;
}
</style>
CSS;
    }
}
?>
