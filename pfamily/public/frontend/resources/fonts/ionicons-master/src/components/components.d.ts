/* tslint:disable */
/**
 * This is an autogenerated file created by the Stencil compiler.
 * It contains typing information for all components that exist in this project.
 */


import '@stencil/core';




export namespace Components {

  interface IonIcon {
    /**
    * Specifies the label to use for accessibility. Defaults to the icon name.
    */
    'ariaLabel'?: string;
    /**
    * The color to use for the background of the item.
    */
    'color'?: string;
    /**
    * Specifies whether the icon should horizontally flip when `dir` is `"rtl"`.
    */
    'flipRtl'?: boolean;
    /**
    * A combination of both `name` and `src`. If a `src` url is detected it will set the `src` property. Otherwise it assumes it's a built-in named SVG and set the `name` property.
    */
    'icon'?: string;
    /**
    * Specifies which icon to use on `ios` mode.
    */
    'ios'?: string;
    /**
    * If enabled, ion-icon will be loaded lazily when it's visible in the viewport. Default, `false`.
    */
    'lazy': boolean;
    /**
    * Specifies which icon to use on `md` mode.
    */
    'md'?: string;
    /**
    * The mode determines which platform styles to use. Possible values are: `"ios"` or `"md"`.
    */
    'mode'?: 'ios' | 'md';
    /**
    * Specifies which icon to use from the built-in set of icons.
    */
    'name'?: string;
    /**
    * The size of the icon. Available options are: `"small"` and `"large"`.
    */
    'size'?: string;
    /**
    * Specifies the exact `src` of an SVG file to use.
    */
    'src'?: string;
  }
  interface IonIconAttributes extends StencilHTMLAttributes {
    /**
    * Specifies the label to use for accessibility. Defaults to the icon name.
    */
    'ariaLabel'?: string;
    /**
    * The color to use for the background of the item.
    */
    'color'?: string;
    /**
    * Specifies whether the icon should horizontally flip when `dir` is `"rtl"`.
    */
    'flipRtl'?: boolean;
    /**
    * A combination of both `name` and `src`. If a `src` url is detected it will set the `src` property. Otherwise it assumes it's a built-in named SVG and set the `name` property.
    */
    'icon'?: string;
    /**
    * Specifies which icon to use on `ios` mode.
    */
    'ios'?: string;
    /**
    * If enabled, ion-icon will be loaded lazily when it's visible in the viewport. Default, `false`.
    */
    'lazy'?: boolean;
    /**
    * Specifies which icon to use on `md` mode.
    */
    'md'?: string;
    /**
    * The mode determines which platform styles to use. Possible values are: `"ios"` or `"md"`.
    */
    'mode'?: 'ios' | 'md';
    /**
    * Specifies which icon to use from the built-in set of icons.
    */
    'name'?: string;
    /**
    * The size of the icon. Available options are: `"small"` and `"large"`.
    */
    'size'?: string;
    /**
    * Specifies the exact `src` of an SVG file to use.
    */
    'src'?: string;
  }
}

declare global {
  interface StencilElementInterfaces {
    'IonIcon': Components.IonIcon;
  }

  interface StencilIntrinsicElements {
    'ion-icon': Components.IonIconAttributes;
  }


  interface HTMLIonIconElement extends Components.IonIcon, HTMLStencilElement {}
  var HTMLIonIconElement: {
    prototype: HTMLIonIconElement;
    new (): HTMLIonIconElement;
  };

  interface HTMLElementTagNameMap {
    'ion-icon': HTMLIonIconElement
  }

  interface ElementTagNameMap {
    'ion-icon': HTMLIonIconElement;
  }


  export namespace JSX {
    export interface Element {}
    export interface IntrinsicElements extends StencilIntrinsicElements {
      [tagName: string]: any;
    }
  }
  export interface HTMLAttributes extends StencilHTMLAttributes {}

}
