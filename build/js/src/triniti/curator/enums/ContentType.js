import Enum from '@gdbots/pbj/Enum';

export default class ContentType extends Enum {
}

ContentType.configure({
  UNKNOWN: 'unknown',
  ARTICLE: 'article',
  AUDIO: 'audio',
  CATEGORY: 'category',
  GALLERY: 'gallery',
  IMAGE: 'image',
  LINK: 'link',
  POLL: 'poll',
  PROFILE: 'profile',
  QUOTE: 'quote',
  SOLICIT: 'solicit',
  TEXT: 'text',
  VIDEO: 'video',
}, 'triniti:curator:content-type');
