import { addFilter } from '@wordpress/hooks';
import { useDebounce, createHigherOrderComponent } from '@wordpress/compose';
import { Fragment, useState } from '@wordpress/element';
import { InspectorControls } from '@wordpress/block-editor';
import { PanelBody, Button } from '@wordpress/components';
import { __ } from '@wordpress/i18n';

import classnames from 'classnames';
import { THEME_NAME } from '../../helpers';

// 拡張対象ブロック
const allowedBlocks = [ 'core/list' ];

// custom attributesの追加
function addCustomAttributes( settings ) {
  if ( allowedBlocks.includes( settings.name ) ) {
    settings.attributes = Object.assign( settings.attributes, {
      extraStyle: {
        type: 'string',
        default: '',
      },
    } );
  }
  return settings;
}
addFilter(
  'blocks.registerBlockType',
  'cocoon-blocks/style-custom-attributes',
  addCustomAttributes
);

// Edit拡張
const addCustomEdit = createHigherOrderComponent( ( BlockEdit ) => {
  return ( props ) => {
    if ( allowedBlocks.includes( props.name ) && props.isSelected ) {
      const { setAttributes, isSelected, attributes } = props;
      const { className, extraStyle } = attributes;

      const extraStyles = [
        {
          style: '',
          buttonText: __( 'デフォルト', THEME_NAME ),
        },
        {
          style: 'enclosed-numeric-list',
          buttonText: __( '丸数字', THEME_NAME ),
        },
        {
          style: 'rank-list',
          buttonText: __( '順位', THEME_NAME ),
        },
        {
          style: 'step-list',
          buttonText: __( 'ステップ', THEME_NAME ),
        },
        {
          style: 'check-list',
          buttonText: __( 'チェック', THEME_NAME ),
        },
        {
          style: 'check-valid-list',
          buttonText: __( 'チェック有効', THEME_NAME ),
        },
        {
          style: 'check-disabled-list',
          buttonText: __( 'チェック無効', THEME_NAME ),
        },
        {
          style: 'circle-list',
          buttonText: __( '丸', THEME_NAME ),
        },
        {
          style: 'triangle-list',
          buttonText: __( '三角', THEME_NAME ),
        },
        {
          style: 'cross-list',
          buttonText: __( 'バツ', THEME_NAME ),
        },
        {
          style: 'annotation-list',
          buttonText: __( '注釈', THEME_NAME ),
        },
      ];

      return (
        <Fragment>
          <BlockEdit { ...props } />

          { isSelected && (
            <InspectorControls>
              <PanelBody
                title={ __( '[C] スタイル', THEME_NAME ) }
                initialOpen={ false }
              >
                <div class="__clearBtn">
                  <button
                    type="button"
                    class="components-button is-small"
                    onClick={ () => setAttributes( { extraStyle: '' } ) }
                  >
                    <span class="dashicons dashicons-editor-removeformatting"></span>
                    { __( 'スタイルをクリア', THEME_NAME ) }
                  </button>
                </div>
                <div className="block-editor-block-styles">
                  <div className="block-editor-block-styles__variants style-buttons">
                    { extraStyles.map( ( style, index ) => {
                      return (
                        <div
                          className={ classnames( '__btnBox', {
                            [ '__btnBoxDefault display-none' ]: ! style.style,
                          } ) }
                        >
                          <Button
                            id={ 'cocoon-dorder-style02-button-' + index }
                            className={ classnames(
                              'display-none',
                              'block-editor-block-styles__item',
                              {
                                'is-active': style.style === extraStyle,
                              }
                            ) }
                            variant="secondary"
                            label={ style.buttonText }
                            onClick={ () => {
                              if ( style.style === extraStyle ) {
                                setAttributes( { extraStyle: '' } );
                              } else {
                                setAttributes( { extraStyle: style.style } );
                              }
                            } }
                          ></Button>
                          <label
                            for={ 'cocoon-dorder-style02-button-' + index }
                            class="__labelBtn"
                            data-selected={
                              style.style === extraStyle ? true : false
                            }
                          >
                            <span class="__prevWrap editor-styles-wrapper">
                              <ul
                                className={ classnames( '__prev', 'wp-block-list', {
                                  [ 'is-style-' + style.style ]: !! style.style,
                                  [ 'has-box-style' ]: style.style,
                                } ) }
                              >
                                  <li>aaa</li>
                                  <li>bbb</li>
                                  <li>ccc</li>
                              </ul>
                            </span>
                            <span class="__prevTitle">
                              { style.buttonText }
                            </span>
                          </label>
                        </div>
                      );
                    } ) }
                  </div>
                </div>
                <div class="__clearBtn">
                  <button
                    type="button"
                    class="components-button is-small"
                    onClick={ () => setAttributes( { extraStyle: '' } ) }
                  >
                    <span class="dashicons dashicons-editor-removeformatting"></span>
                    { __( 'スタイルをクリア', THEME_NAME ) }
                  </button>
                </div>
              </PanelBody>
            </InspectorControls>
          ) }
        </Fragment>
      );
    }

    return <BlockEdit { ...props } />;
  };
}, 'addCustomEdit' );
addFilter(
  'editor.BlockEdit',
  'cocoon-blocks/style-custom-edit',
  addCustomEdit
);

// 親ブロックへのクラス適用
const applyAttributesToBlock = createHigherOrderComponent(
  ( BlockListBlock ) => {
    return ( props ) => {
      const { attributes, className, name, isValid } = props;

      if ( isValid && allowedBlocks.includes( name ) ) {
        const { extraStyle } = attributes;

        return (
          <BlockListBlock
            { ...props }
            className={ classnames( className, {
              [ 'is-style-' + extraStyle ]: !! extraStyle,
              [ 'has-box-style' ]: extraStyle,
            } ) }
          />
        );
      }

      return <BlockListBlock { ...props } />;
    };
  },
  'applyAttributesToBlock'
);
addFilter(
  'editor.BlockListBlock',
  'cocoon-blocks/style-apply-attributes',
  applyAttributesToBlock
);

// Save拡張
const addCustomSave = ( props, blockType, attributes ) => {
  if ( allowedBlocks.includes( blockType.name ) ) {
    const { className } = props;
    const { extraStyle } = attributes;

    props.className = classnames( className, {
      [ 'is-style-' + extraStyle ]: !! extraStyle,
      [ 'has-box-style' ]: extraStyle,
    } );

    return Object.assign( props );
  }
  return props;
};
addFilter(
  'blocks.getSaveContent.extraProps',
  'cocoon-blocks/style-custom-save',
  addCustomSave
);
