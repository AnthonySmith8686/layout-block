import {
	useBlockProps,
	InspectorControls,
	InnerBlocks,
} from '@wordpress/block-editor';
import { PanelBody, RangeControl } from '@wordpress/components';
import ServerSideRender from '@wordpress/server-side-render';

export default function Edit({ attributes, setAttributes }) {
	const { columns, gap } = attributes;

	return (
		<>
			<InspectorControls>
				<PanelBody title="Layout Settings" initialOpen={true}>
					<RangeControl
						label="Columns"
						min={1}
						max={6}
						value={columns}
						onChange={(columns) => setAttributes({ columns })}
					/>
					<RangeControl
						label="Gap (px)"
						min={0}
						max={100}
						value={gap}
						onChange={(gap) => setAttributes({ gap })}
					/>
				</PanelBody>
			</InspectorControls>

			<InnerBlocks
				allowedBlocks={['super-layout/column']}
				template={Array.from({ length: columns }, () => ['super-layout/column'])}
				templateLock="all"
			/>
		</>
	);
}
