<?php
// Input Component Class
class Input {
    private $type;
    private $placeholder;
    private $value;
    private $size;
    private $icon;
    private $disabled;
    private $error;
    private $name;

    public function __construct($type = 'text', $placeholder = '', $size = 'md') {
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->size = $size;
        $this->disabled = false;
    }

    public function setValue($value) {
        $this->value = $value;
        return $this;
    }

    public function setIcon($icon) {
        $this->icon = $icon;
        return $this;
    }

    public function setDisabled($disabled) {
        $this->disabled = $disabled;
        return $this;
    }

    public function setError($error) {
        $this->error = $error;
        return $this;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function render() {
        $wrapper_class = 'airbnb-input-wrapper airbnb-input-wrapper--' . $this->size;
        if ($this->error) {
            $wrapper_class .= ' airbnb-input-wrapper--error';
        }
        if ($this->icon) {
            $wrapper_class .= ' airbnb-input-wrapper--with-icon';
        }

        $html = '<div class="' . $wrapper_class . '">';

        if ($this->icon) {
            $html .= '<span class="airbnb-input__icon">' . $this->icon . '</span>';
        }

        $attributes = ' class="airbnb-input airbnb-input--' . $this->size . '"';
        $attributes .= ' type="' . htmlspecialchars($this->type) . '"';
        $attributes .= ' placeholder="' . htmlspecialchars($this->placeholder) . '"';
        
        if ($this->value) {
            $attributes .= ' value="' . htmlspecialchars($this->value) . '"';
        }
        if ($this->disabled) {
            $attributes .= ' disabled';
        }
        if ($this->name) {
            $attributes .= ' name="' . htmlspecialchars($this->name) . '"';
        }

        $html .= '<input ' . $attributes . ' />';

        $html .= '</div>';

        if ($this->error) {
            $html .= '<span class="airbnb-input__error">' . htmlspecialchars($this->error) . '</span>';
        }

        return $html;
    }

    public static function renderCSS() {
        return <<<'CSS'
<style>
/* ============================================================
   INPUT COMPONENT - AIRBNB STYLE
   ============================================================ */

.airbnb-input-wrapper {
    position: relative;
    display: inline-flex;
    width: 100%;
}

.airbnb-input {
    width: 100%;
    border: 1.5px solid #DDDDDD;
    border-radius: 8px;
    padding: 12px 16px;
    font-family: inherit;
    font-size: 14px;
    color: #222222;
    transition: all 0.2s ease;
    background: white;
}

.airbnb-input::placeholder {
    color: #B0B0B0;
}

.airbnb-input:hover {
    border-color: #B0B0B0;
}

.airbnb-input:focus {
    outline: none;
    border-color: #FF385C;
    box-shadow: 0 0 0 3px rgba(255, 56, 92, 0.1);
}

.airbnb-input:disabled {
    background: #f7f7f7;
    color: #B0B0B0;
    cursor: not-allowed;
}

/* ── With Icon ── */

.airbnb-input-wrapper--with-icon {
    position: relative;
}

.airbnb-input-wrapper--with-icon .airbnb-input {
    padding-left: 40px;
}

.airbnb-input__icon {
    position: absolute;
    left: 12px;
    top: 50%;
    transform: translateY(-50%);
    color: #B0B0B0;
    font-size: 16px;
}

/* ── Sizes ── */

.airbnb-input--sm {
    padding: 8px 12px;
    font-size: 13px;
    border-radius: 6px;
}

.airbnb-input-wrapper--sm.airbnb-input-wrapper--with-icon .airbnb-input {
    padding-left: 36px;
}

.airbnb-input--md {
    padding: 12px 16px;
    font-size: 14px;
    border-radius: 8px;
}

.airbnb-input--lg {
    padding: 14px 18px;
    font-size: 15px;
    border-radius: 8px;
}

/* ── Error ── */

.airbnb-input-wrapper--error .airbnb-input {
    border-color: #C13515;
}

.airbnb-input-wrapper--error .airbnb-input:focus {
    box-shadow: 0 0 0 3px rgba(193, 53, 21, 0.1);
}

.airbnb-input__error {
    display: block;
    font-size: 12px;
    color: #C13515;
    margin-top: 6px;
}
</style>
CSS;
    }
}
?>
